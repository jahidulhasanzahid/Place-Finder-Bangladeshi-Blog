<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\information;
use App\allphoto;
use App\status;
use App\User;
use App\Admin;
use Image;
use File;

class PagesController extends Controller
{
    //
    public function __construct()
  {
    $this->middleware('auth:admin');
  }
    public function welcome(){
    	$photo = allphoto::get()->count('id');
        $information = information::get()->count('id');
        $user = User::get()->count('id');
        $post = status::get()->count('id');

    	return view('backend.welcome')->with(compact('photo','information','user','post'));
    }

    public function photos(){
    	
    	return view('backend.photos');
    }



     public function post(){
        
        return view('backend.post');
    }
    public function managepost(){
        $information_all = information::orderBy('id', 'desc')->get();
        return view('backend.manage-post',compact('information_all'));
    }
}
