<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Student extends Controller
{
    function getData()
    {
        return Students::all();
    }
}
