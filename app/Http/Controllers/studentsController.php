<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class studentsController extends Controller
{
    function allSelect(){

        $result= Students::all();
        return $result;
    }


}
