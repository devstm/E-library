<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbord extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function show()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }

}
