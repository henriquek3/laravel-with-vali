<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('index');
    }

    public function themeDefault()
    {
        return view('vali-default-theme');
    }

    public function bootstrapComponents()
    {
        return view('bootstrap-components');
    }

    public function formComponents()
    {
        return view('form-components');
    }

    public function formCustom()
    {
        return view('form-custom');
    }

    public function formSamples()
    {
        return view('form-samples');
    }

    public function formNotifications()
    {
        return view('form-notifications');
    }
}
