<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\information;
use App\Admin;
use Image;
use File;


class InformationController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    //informationstore
    public function informationstore(Request $request)
  {
    $this->validate($request, [
      'division'  => 'required',
      'area' => 'required',
      'title' => 'required',
      'description' => 'required',
      'image'  => 'required',
    ],
    [
      'division.required'  => 'Please Select A Division',
      'area.required'  => 'Please Select a Area Name',
	  'title.required'  => 'Please Provide a Title',
	  'description.required'  => 'Please Give a Description',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $information = new information();
    $information->division = $request->division;
    $information->area = $request->area;
    $information->title = $request->title;
    $information->description = $request->description;
    
    //insert images also
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/informations/' .$img);
        Image::make($image)->save($location);
        $information->image = $img;
    }
    $information->address = $request->address;
    
    $information->save();

    session()->flash('success', 'A new photo has added successfully !!');
    return redirect()->route('post');

  }


   public function informationdelete($id)
    {
      $information = information::find($id);
      if (!is_null($information)) {
        // Delete brand image
        if (File::exists('images/informations/'.$information->image)) {
          File::delete('images/informations/'.$information->image);
        }
        $information->delete();
      }
      session()->flash('success', 'Information has deleted successfully !!');
      return back();

    }

  public function edit($id)
  {
    $information= information::find($id);
    if (!is_null($information)) {
      return view('backend.edit-information', compact('information'));
    }else {
      return redirect()->route('managepost');
    }
  }

   public function update(Request $request, $id)
    {
      $this->validate($request, [
        'description' => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'description.required'  => 'Please provide Description',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $information = information::find($id);
      $information->description = $request->description;
      //insert images also
      if ($request->hasFile('image')) {
        //Delete the old image from folder

          if (File::exists('images/informations/'.$information->image)) {
            File::delete('images/informations/'.$information->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/informations/' .$img);
          Image::make($image)->save($location);
          $information->image = $img;
      }
      $information->save();

      session()->flash('success', 'Information has updated successfully !!');
      return redirect()->route('post');

    }


}
