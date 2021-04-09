<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class privacyController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('privacy');
    }
    public function term()
    {
        return view('term');
    } 
}