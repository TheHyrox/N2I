<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Email_inputController extends Controller
{
    public function index(Request $request)
    {
        // Read the file contents
        $filePath = public_path('VERY LONG TEXT.TXT');
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }
        $fileContents = file_get_contents($filePath);

        return view('email_input', ['fileContents' => $fileContents]);
    }
}