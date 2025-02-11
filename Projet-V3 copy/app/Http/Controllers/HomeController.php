<?php

namespace App\Http\Controllers;

use App\Models\Hike; // Make sure to import the Hike model

class HomeController extends Controller
{
    public function index()
    {
        // Get all hikes from the database
        $hike = Hike::all();

        // Pass the hikes data to the view
        return view('home', compact('hike'));
    }
}
