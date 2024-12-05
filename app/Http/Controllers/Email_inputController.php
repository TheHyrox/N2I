<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Email_inputController extends Controller
{
    public function index()
    {
        return view('email_input');
    }
}
