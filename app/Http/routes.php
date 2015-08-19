<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//route to Admin Login page
Route::get('loginAdmin', 'LoginController@loginAdmin');

//route to Guest Login page
Route::get('loginGuest', 'LoginController@loginGuest');

//route to Librarian Login page
Route::get('loginLibrarian', 'LoginController@loginLibrarian');

//route to Student Login page
Route::get('loginStudent', 'LoginController@loginStudent');

//route to Teacher Login page
Route::get('loginTeacher', 'LoginController@loginTeacher');

//route to Latest Books page
Route::get('latestBooks', 'AdminController@latestBooks');

//route to Librarian Record Book page
Route::get('recordBooks', 'Librarian@recordBooks');

//route to Guest View Record page
Route::get('guestViewRecord', 'GuestController@guestViewRecord');

//route to Student Record Nilam page
Route::get('studentRecordNilam', 'StudentController@stdRecordNilam');
