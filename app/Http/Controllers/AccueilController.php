<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function accueil()
    {
        return view('accueil'); // Adjust the view name as needed
    }
}