<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\allphoto;
use App\Admin;

use Image;
use File;

class AllphotoController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }
    //
      public function managephotos(){

          $allphotos = allphoto::orderBy('id', 'desc')->get();
          return view('backend.manage-photos', compact('allphotos'));  

      }

      
    public function photodelete($id)
    
    {
      $allphoto = allphoto::find($id);
      if (!is_null($allphoto)) {
        // Delete brand image
        if (File::exists('images/allphotos/'.$allphoto->image)) {
          File::delete('images/allphotos/'.$allphoto->image);
        }
        $allphoto->delete();
      }
      session()->flash('success', 'Photo has deleted successfully !!');
      return back();

    }


public function photostore(Request $request)
  {
    $this->validate($request, [
      'photo_title'  => 'required',
      'photo_division' => 'required',
      'image'  => 'nullable|image',
    ],
    [
      'photo_title.required'  => 'Please provide a photo title',
      'photo_division' => 'Please provide a division name',
      'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
    ]);

    $allphoto = new allphoto();
    $allphoto->photo_title = $request->photo_title;
    $allphoto->photo_division = $request->photo_division;
    //insert images also
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = public_path('images/allphotos/' .$img);
        Image::make($image)->save($location);
        $allphoto->image = $img;
    }
    $allphoto->save();

    session()->flash('success', 'A new photo has added successfully !!');
    return redirect()->route('photos');

  }



  public function edit($id)
  {
    $allphotos= allphoto::find($id);
    if (!is_null($allphotos)) {
      return view('backend.edit-photo', compact('allphotos'));
    }else {
      return resirect()->route('managephotos');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'photo_title'  => 'required',
        'image'  => 'nullable|image',
      ],
      [
        'photo_title.required'  => 'Please provide a photo title',
        'image.image'  => 'Please provide a valid image with .jpg, .png, .gif, .jpeg exrension..',
      ]);

      $allphoto = allphoto::find($id);
      $allphoto->photo_title = $request->photo_title;
      //insert images also
      if ($request->hasFile('image')) {
        //Delete the old image from folder

          if (File::exists('images/allphotos/'.$allphoto->image)) {
            File::delete('images/allphotos/'.$allphoto->image);
          }

          $image = $request->file('image');
          $img = time() . '.'. $image->getClientOriginalExtension();
          $location = public_path('images/allphotos/' .$img);
          Image::make($image)->save($location);
          $allphoto->image = $img;
      }
      $allphoto->save();

      session()->flash('success', 'Photo has updated successfully !!');
      return redirect()->route('photos');

    }


}
