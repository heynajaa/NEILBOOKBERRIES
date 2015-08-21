<?php


namespace App\Http\Controllers;
use App\Student; 
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
	public function mclass()
    {
    	return view('admin.manageClass');
    }

    public function mstudent()
    {
    	$students = Student::all();

  		return view('admin.manageStudent' , compact('students'));
    }
   

}
