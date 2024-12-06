<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CaptchaController extends Controller
{
    public function index(Request $request)
    {
        // Set a cookie
        $cookieValue = 'some_value';
        Cookie::queue('captcha_cookie', $cookieValue, 60); // 60 minutes

        // Read the file contents
        $filePath = public_path('VERY LONG TEXT.TXT');
        $fileContents = file_get_contents($filePath);

        return view('captcha', ['cookieValue' => $cookieValue, 'fileContents' => $fileContents]);
    }
}