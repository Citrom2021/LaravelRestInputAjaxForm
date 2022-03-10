<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

class GuestController extends Controller
{
    function index(){

        return view('guests.index');
    }
    function save (Request $request){
        $validator = Validator::make($request->all(),[

            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'password2'=>'required',

        ]);
    }
}
