<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostDashboardController extends Controller
{
    public function showAll()
    {
        return view('dashboard');
    }
}
