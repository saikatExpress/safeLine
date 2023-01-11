<?php

namespace App\Http\Controllers\control;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\control\secondController;
use Illuminate\Support\Facades\View;

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

    public function home()
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
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        return redirect()->action([secondController::class, 'SecondTest']);
    }

    public function studentAbout(Request $request)
    {
        dd($request->all());
    }

    public function saikat()
    {
        return view('goin');
    }

    public function lara()
    {
        return view('page.laravel', ['name' => 'Saikat'], ['email' => 'saikathosen444@gmail.com']);
    }

    public function profileStore(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|max:55',
            'email' => 'required|email',
            'password' => 'required|min:8|max:12',
        ]);
    }
}