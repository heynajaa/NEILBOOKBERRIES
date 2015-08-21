<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
	public function rbook()
	{
		return view('librarian.recordBook');
	}

	public function lbook()
	{
		return view('student.latestBook');
	}

}
