<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->job_type === 'admin'){
            return view('livewire.admin.home-admin');
        } else if (Auth::user()->job_type === 'LEC') {
            return view('livewire.lecturer.home-lecturer');
        } else {
            return view('#');
        }
    }
}
