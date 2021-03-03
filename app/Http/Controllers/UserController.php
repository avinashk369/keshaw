<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Validator;
use Session;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{

    /**
     * test excel import
     */
    public function readExcelData(){
        $row =  Excel::toArray(new ProductsImport, 'students.xlsx');
        dd($row);
        exit;
        $notSaved = array();
        $saved = array();
        foreach($row as $key){
        foreach($key as $v)
         {
             $userData = array();
             $courseMapping = array();
             
             if($v['user_name']!=''){
                 try {
                     $userMaster = UserMaster::where('phone_number','=',$v['user_name'])
                     ->where('user_type_id','=','3')
                     ->first();
                 } catch (\Throwable $th) {
                     return response()->json(['message'=>$th->getMessage()], Response::HTTP_BAD_REQUEST);
                 }
                 try {
                     if(is_null($userMaster)){
                         $userData['name'] = $v['name'];
                         $userData['phone_number'] = $v['user_name'];
                         $userData['password'] = ($v['password']!='') ?bcrypt($v['password']):bcrypt('123456');
                         $userData['otp'] = '123456';
                         $userData['user_type_id'] = '3';
                         //DB transaction
                         DB::beginTransaction(); 
                         $admin = UserMaster::create($userData);
                         //once user is save start saving its course mapping
                         //get course id by course name make query to get the course detail by name
                         //if course not found make a entry in file of entire row and rollback the transaction
                         $courseMaster = Course::where('name','=',trim($v['course']))
                                     ->first();
                         
                                     if(is_null($courseMaster)){
                                         //rollback code
                                         DB::rollback();
                                         $notSaved[$v['sr_no']] = $v;
                                     }else{
                                         $courseMapping['course_id'] = $courseMaster['id'];
                                         $courseMapping['user_id'] = $admin['id'];
                                         $userCourse = UserCourseMapping::create($courseMapping);
                                         $saved[$v['sr_no']] = $v;
                                         DB::commit();
                                     }
 
                     }
                 } catch (\Throwable $th) {
                     return response()->json(['message'=>$th->getMessage()], Response::HTTP_BAD_REQUEST);
                 }
                 
             }else{
                 $notSaved[$v['sr_no']] = $v;
             }
         }
        }
        $response['not_saved'] = count($notSaved);
        $response['saved'] = count($saved);
        // $response['not_saved_list'] = $notSaved;
        // $response['saved_list'] = $saved;
        
        try {
             //return Excel::download(new UsersNotExport($notSaved), 'not_imported.xlsx');
             //Excel::download(new UsersExport($saved), 'imported.xlsx');
            //return response()->json($response, Response::HTTP_BAD_REQUEST);
        } catch (\Throwable $th) {
            //return response()->json(['message'=>$th->getMessage()], Response::HTTP_BAD_REQUEST);
        }
        
        //return response()->json($response, Response::HTTP_OK);
     }


    /**
     * user login function
     */
    public function login(Request $request){
        try {

            $validator = Validator::make($request->all(), [
                'phone' => 'required',
                'password' => 'required'
            ]);
       
            if($validator->fails()){
                foreach($validator->errors()->toArray() as $err)
                foreach($err as $er)
                    $errors = $er;
                    
                    return response(['status' => true,'message'=>$validator->errors()], Response::HTTP_UNAUTHORIZED);
                //return back()->with('message', $errors);
            }
            else{
                
                $request->session()->put('access_token',"Avinash");
                return response(['status' => true,], Response::HTTP_OK);
                
            }
            //$input = $request->except(['owner_type']);
             
            //return response()->json($courseAssignmentMapping, Response::HTTP_OK);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            exit;
            //return response()->json(['error'=>$th->getMessage()], Response::HTTP_BAD_REQUEST);
        }
    }
}
