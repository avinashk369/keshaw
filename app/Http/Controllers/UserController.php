<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Validator;

class UserController extends Controller
{
    /**
     * user login function
     */
    public function login(Request $request){
        try {

            $validator = Validator::make($request->all(), [
                'phone' => 'required'
            ]);
       
            if($validator->fails()){
                foreach($validator->errors()->toArray() as $err)
                foreach($err as $er)
                    $errors = $er;
                    
                    return response(['status' => true,'message'=>$errors], Response::HTTP_UNAUTHORIZED);
                //return back()->with('message', $errors);
            }
            else{
                return response(['status' => true,'message'=>"Success"], Response::HTTP_OK);
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
