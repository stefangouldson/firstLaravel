<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'The Home';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title2 = 'About Us';
        return view('pages.about')->with('title', $title2);
    }

    public function users(){

        $data = ['title'=>'Users Page', 'names'=>['Telmo', "Nathan", "Robbie"]];
        return view('pages.users')->with($data);
    }

    public function welcome(){
        return view('pages.welcome');
    }
}
