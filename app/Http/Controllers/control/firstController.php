<?php

namespace App\Http\Controllers\control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class firstController extends Controller
{
    public function index()
    {
        return view('about1');
    }
    public function profile()
    {
        return view('profile');
    }

    public function dash()
    {
        return view('myDashboard');
    }
}