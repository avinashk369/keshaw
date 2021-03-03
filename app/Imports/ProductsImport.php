<?php

namespace App\Imports;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return $row;
        //dd($row['name']);
        //exit;
        // return new UserMaster([
        //     'name'     => $row[1],
        //     'phone_number'    => $row[2], 
        //     'password' => Hash::make($row[3]),
        //     'otp' => Hash::make($row[3]),
        //     'user_type_id' => "3",
        //  ]);
    }
}
