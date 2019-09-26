<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\status;
use App\User;
use App\information;
use Image;
use File;
use Auth;

class StatusController extends Controller
{
   public function statusstore(Request $request)
  {
    $this->validate($request, [
      'post'  => 'required',
    ],
    [
      'post.required'  => 'Please provide a photo title',
    ]);

    $status = new status();
    $status->post = $request->post;
    // $status->photo_division = $request->photo_division;
    //insert images also
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/status/' .$img);
        Image::make($image)->save($location);
        $status->image = $img;
    }
    if (Auth::check()) {
      
      $status->user_id = Auth::user()->name;
    }
    $status->save();

    session()->flash('success', 'A Status has added successfully !!');
    return redirect()->route('visitor');

  }


   public function visitor(){
   		$status = status::orderby('id','DESC')->get();
    	return view('frontend.visitor-forum',compact('status'));
    }

    public function logins(){
      $status = User::orderby('id','DESC')->get();
      return view('frontend.visitor-forum',compact('status'));
    }

    public function comment($id){
        $status = status::find($id);
        return view ('frontend.extra.post', compact('status'));
    }

    public function infocomment($id){
        $info = information::find($id);
        return view ('frontend.extra.info',compact('info'));
    }

}
