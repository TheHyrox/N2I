<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function showAccueil()
    {
        $filePath = public_path('VERY LONG TEXT.TXT');
        $fileContents = file_get_contents($filePath);

        return view('accueil', ['fileContents' => $fileContents]);
    }
}