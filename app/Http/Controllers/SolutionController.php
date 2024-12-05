<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SolutionController extends Controller
{
    public function index()
    {
        // Your logic here
        return view('solutions.index');
    }
}