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

/*Route::get('/', function () {
    return view('welcome');
});*/


//trial
//Route::get('/', 'WelcomeController@index');
//Route::get('contact', 'WelcomeController@contact');
//Route::get('about', 'PagesController@about');
Route::get('about', 'TrialController@about');


//route to Admin Login page
Route::get('loginAdmin', 'PagesController@loginAdmin');

//route to Guest Login page
Route::get('loginGuest', 'PagesController@loginGuest');

//route to Librarian Login page
Route::get('loginLibrarian', 'PagesController@loginLibrarian');

//route to Student Login page
Route::get('loginStudent', 'PagesController@loginStudent');

//route to Teacher Login page
Route::get('loginTeacher', 'PagesController@loginTeacher');

//route to Latest Books page
Route::get('latestBooks', 'PagesController@latestBooks');

//route to Librarian Record Book page
Route::get('recordBooks', 'PagesController@recordBooks');

//route to Guest View Record page
Route::get('guestViewRecord', 'PagesController@guestViewRecord');

//route to Student Record Nilam page
Route::get('studentRecordNilam', 'PagesController@stdRecordNilam');
