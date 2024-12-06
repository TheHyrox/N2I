<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Email_inputController extends Controller
{
    public function index(Request $request)
    {
        return view('email_input');
    }
}