<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginAdmin() {
  	
    	return view('auth.admin');
    }

    public function loginLibrarian() {    

        return view('auth.librarian');
       
    }

    public function loginStudent() {    

        return view('auth.student');
       
    }

    public function loginTeacher() {    

        return view('auth.teacher');
       
    }

    public function loginGuest() {    

        return view('auth.guest');
       
    }


}
