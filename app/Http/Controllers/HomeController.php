<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(){
        $data = product::paginate(3);
        return view('user.home',compact('data'));

    }

    public function redirect(){
        $data = product::paginate(3);
        return view('user.home',compact('data'));  
    }

    public function search(Request $request){

    $search = $request->search;
    $data = product::where('title','Like','%'.$search.'%')->get();
    
    return view('user.home',compact('data'));
    
    }

    public function addcart(Request $request, $id){
        if(Auth::id()){
            return redirect()->back();
        }else{
            return redirect('login');
        }
        
        
    }

}

