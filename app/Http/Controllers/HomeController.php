<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\HomeEvent;

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
        event(new HomeEvent("Ola mundo"));
        return view('home');
    }
}
