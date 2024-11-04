<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calendar()
    {
        return view('calendar');
    }
    
    public function chatMessage()
    {
        return view('chatMessage');
    }
    
    public function chatEmpty()
    {
        return view('chatEmpty');
    }
    
    public function veiwDetails()
    {
        return view('veiwDetails');
    }

    public function email()
    {
        return view('email');
    }

    public function error1()
    {
        return view('error');
    }

    public function faq()
    {
        return view('faq');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function kanban()
    {
        return view('kanban');
    }

    public function pricing()
    {
        return view('pricing');
    }

    public function termsCondition()
    {
        return view('termsCondition');
    }

    public function widgets()
    {
        return view('widgets');
    }
    public function chatProfile()
    {
        return view('chatProfile');
    }

}