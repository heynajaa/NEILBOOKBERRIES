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

//
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

//welcome ok
Route::get('/', 'PagesController@index'); 

// admin 
Route::get('homeadmin', 'AdminController@home'); 
Route::get('manageclass', 'ClassController@mclass'); 
Route::get('managestudent' , 'ClassController@mstudent'); // {id} catch anything type 
Route::get('studentrecord', 'StudentController@mrecord'); 

// guest
Route::get('homeguest', 'GuestController@home'); 
Route::get('nilamstudentguest', 'GuestController@nstudentguest'); 

// librarian
Route::get('homelibrarian', 'LibrarianController@home'); 
Route::get('recordbook' , 'BookController@rbook');
Route::get('bookborrow' , 'BorrowController@bbook');
Route::get('sendmessage' , 'BorrowController@sendmsg');

// student 
Route::get('homestudent', 'StudentController@home'); 
Route::get('latestbook' , 'BookController@lbook');
Route::get('recordnilam' , 'NilamController@rnilam');
Route::get('noti' , 'StudentController@noti');
Route::get('nilam' , 'NilamController@nilamlist');

// teacher
Route::get('hometeacher', 'TeacherController@home'); 
Route::get('nilamclass', 'NilamController@nclass'); 
Route::get('nilamstudent', 'NilamController@nstudent'); 
Route::get('commentnilam', 'NilamController@comment'); 



//Route::get('managestudent', 'AdminController@mstudent'); 

/*//route to Admin Login page
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
*/