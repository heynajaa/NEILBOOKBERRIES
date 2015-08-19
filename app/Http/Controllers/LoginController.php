<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function loginAdmin() {
  	
    	return view('login_gui.admin');

    }

    public function loginLibrarian() {    

        return view('login_gui.librarian');
       
    }

    public function loginStudent() {    

        return view('login_gui.student');
       
    }

    public function loginTeacher() {    

        return view('login_gui.teacher');
       
    }

    public function loginGuest() {    

        return view('login_gui.guest');
       
    }


}
