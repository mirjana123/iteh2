<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data = product::all();
        return view('user.home',compact('data'));

    }

    public function redirect(){
        $data = product::all();
        return view('user.home',compact('data'));
    }
}

