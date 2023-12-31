<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function service() {
        return view('service');
    }

    public function blog() {
        return view('blog');
    }

    public function contact() {
        return view('contact');
    }
}
