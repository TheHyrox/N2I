<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Email_inputController extends Controller
{
    public function index(Request $request)
    {
        // Define the file path
        $filePath = public_path('VERY LONG TEXT.TXT');

        // Check if the file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found.'], 404);
        }

        // Read the file contents
        $fileContents = file_get_contents($filePath);

        return view('email_input', ['fileContents' => $fileContents]);
    }
}