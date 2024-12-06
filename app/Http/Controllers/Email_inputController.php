<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Email_inputController extends Controller
{
    public function index(Request $request)
    {
        // Read the file contents
        $filePath ='VERY LONG TEXT.TXT';
        $fileContents = file_get_contents($filePath);

        return view('email_input', ['fileContents' => $fileContents]);
    }
}