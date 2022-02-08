<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getData(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'userpassword'=>'required'
        ]);
        return $req->input();
        
    }
}
