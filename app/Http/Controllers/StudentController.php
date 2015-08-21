<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
	public function home()
	{

		return view('student.homeStudent');
	}

	public function mrecord()
	{

		return view('admin.studentRecord');
	}

	public function noti()
	{
		return view('student.noti');
	}

}
