<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data = [
           'galleries' => Gallery::all(),
        ];
        return view('user.index', $data);
    }
}