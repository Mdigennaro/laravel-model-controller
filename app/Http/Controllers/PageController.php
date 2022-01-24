<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $movies = Movie::all();
        dump($movies);

        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contacts');
    }
}
