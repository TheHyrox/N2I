<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Captcha;


class CaptchaController extends Controller
{
    public function index()
    {
        return view('captcha');
    }
}