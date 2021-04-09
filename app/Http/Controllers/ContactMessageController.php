<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('contact');
    } 
}