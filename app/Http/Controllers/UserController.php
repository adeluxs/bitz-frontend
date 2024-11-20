<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        return view('dashboard.home');
    }

    public function source()
    {
        return view('dashboard.source');
    }

    public function billing()
    {
        return view('dashboard.billing');
    }

    public function connection()
    {
        return view('dashboard.connection');
    }

    public function performance()
    {
        return view('dashboard.performance');
    }

    public function user()
    {
        return view('dashboard.user');
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    public function settings()
    {
        return view('dashboard.settings');
    }

    public function support()
    {
        return view('dashboard.support');
    }


    public function feature()
    {
        return view('user.feature');
    }

    public function contact()
    {
        return view('user.contact');
    }


    public function pricing()
    {

        return view('user.pricing');
    }
}
