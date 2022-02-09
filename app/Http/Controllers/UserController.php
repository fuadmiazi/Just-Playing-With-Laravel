<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required | max: 10',
            'userpassword'=>'required | min: 8'
        ]);
        return $req->input();
        
    }
}
