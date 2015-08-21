<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NilamController extends Controller
{
	public function rnilam()
	{
		return view('student.recordNilam');
	}

	public function nilamlist()
	{
		return view('student.nilamList');
	}

	public function nclass()
	{
		return view('teacher.nilamClass');
	}

	public function nstudent()
	{
		return view('teacher.nilamStudent');
	}	

	public function comment()
	{
		return view('teacher.commentNilam');
	}

}
