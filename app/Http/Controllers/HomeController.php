<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data = [
           
        ];
        return view('homepage.index', $data);
    }

    public function menu(){
        $data = [
            'contact' => Contact::first(),
        ];
        return view('homepage.menu', $data);
    }

    public function information(){
        $data = [
            'contact' => Contact::first(),
            'other' => About::first(),
        ];
        return view('homepage.contact', $data);
    }

    public function aboutus(){
        $data = [
            'other' => About::first(),
        ];
        return view('homepage.aboutus', $data);
    }
}
