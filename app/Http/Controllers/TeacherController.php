<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function home() {

    	return view('teacher.hometeacher');
    }


}
