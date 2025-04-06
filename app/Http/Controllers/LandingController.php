<?php

// app/Http/Controllers/LandingController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing'); // view file resources/views/landing.blade.php
    }
}
