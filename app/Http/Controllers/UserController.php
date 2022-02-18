<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    // function getData(Request $req)
    // {
    //     $req->validate([
    //         'username'=>'required | max: 10',
    //         'userpassword'=>'required | min: 8'
    //     ]);
    //     return $req->input();
        
    // }

    // function index(){
    //     return DB::select("select * from students");
    // }

    // function getData()
    // {
    //     return Students::all();
    // }

    function index()
    {
        //return "API data will be here";
        $collection= Http::get("reqres.in/api/users?page=1");
        return view("users",['collection'=>$collection['data']]);
    }
}
