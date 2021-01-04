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
}