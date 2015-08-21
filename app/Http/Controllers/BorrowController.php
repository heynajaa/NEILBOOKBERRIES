<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BorrowController extends Controller
{
    public function bbook() {

    	return view('librarian.borrowBook');
    }

    public function sendmsg() {

    	return view('librarian.sendMessage');
    }


}
