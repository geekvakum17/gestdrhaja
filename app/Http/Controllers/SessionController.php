<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function store(Request $request){

       /*  $request->validate([
           // 'name'      => 'required',
            'telephone' => 'required|digits:10',
           // 'email'     => 'required|email|unique:users'
        ]); */

        $validator =   Validator::make($request->all(), [
            'telephone' => 'required|digits:10|numeric',
        ]);

        dd($validator->fails());

        if ($validator->fails()) {
            return response()->json(["status" => "failed", "validation_errors" => $validator->errors()]);
        }

    }
}
