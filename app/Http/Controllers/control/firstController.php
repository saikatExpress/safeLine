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

    public function community()
    {
        return view('community');
    }

    public function country()
    {
        return view('country');
    }

    public function studenStore(Request $request)
    {
        $name = $request->name;
        return $name;
    }

    public function studentAbout(Request $request)
    {
        dd($request->all());
    }
}