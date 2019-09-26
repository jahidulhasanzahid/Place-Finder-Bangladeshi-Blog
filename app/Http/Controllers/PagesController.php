<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\allphoto;
use App\information;
use Image;
use File;

class PagesController extends Controller
{
    //
    public function index(){

        $slider = allphoto::where('photo_division','Bangladesh')->get();
    	return view('welcome',compact('slider'));
        // $slider = allphoto::all();
        // return view('welcome',compact('slider'));
    }
    public function aboutus(){
    	return view ('frontend.about-us');
    }
   
    
    public function search(Request $request)
    {
      $search = $request->search;

        $info = information::orWhere('title', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->orWhere('area', 'like', '%'.$search.'%')
        ->orderBy('id', 'desc')
        ->paginate(9);
        return view('frontend.search', compact('search', 'info'));
    }
//dhaka division function
    public function dhaka(){

        $dhaka_photo = allphoto::where('photo_division','Dhaka')->get();
    	return view('frontend.division.dhaka.dhaka',compact('dhaka_photo'));
    }

    public function dhakaHistorical(){
        $information_all = information::where([
                    ['division','Dhaka'],
                    ['area','Historical Place']
                    ])->get();
    	return view('frontend.division.dhaka.dhaka-historical-places',compact('information_all'));
    }
    public function dhakaHospital(){


        $information_all = information::where([
                    ['division','Dhaka'],
                    ['area','Hospital']
                    ])->get();
    	return view('frontend.division.dhaka.dhaka-hospital',compact('information_all'));
    }
    public function dhakaFire(){
        $information_all = information::where([
                    ['division','Dhaka'],
                    ['area','Fire Service']
                    ])->get();
    	return view('frontend.division.dhaka.dhaka-fire-service',compact('information_all'));
    }
    public function dhakaPolice(){
        $information_all = information::where([
                    ['division','Dhaka'],
                    ['area','Police Station']
                    ])->get();
    	return view('frontend.division.dhaka.dhaka-police-station',compact('information_all'));
    }
    public function dhakaHotel(){
        $information_all = information::where([
                    ['division','Dhaka'],
                    ['area','Hotel']
                    ])->get();
    	return view('frontend.division.dhaka.dhaka-hotel',compact('information_all'));
    }
//barishal division function
    public function barishal(){
        
        $barishal_photo = allphoto::where('photo_division','Barishal')->get();
        return view('frontend.division.barishal.barishal',compact('barishal_photo'));
    }

    public function barishalHistorical(){
        $information_all = information::where([
                    ['division','Barishal'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.barishal.barishal-historical-places',compact('information_all'));
    }
    public function barishalHospital(){
        $information_all = information::where([
                    ['division','Barishal'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.barishal.barishal-hospital',compact('information_all'));
    }
    public function barishalFire(){
        $information_all = information::where([
                    ['division','Barishal'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.barishal.barishal-fire-service',compact('information_all'));
    }
    public function barishalPolice(){
        $information_all = information::where([
                    ['division','Barishal'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.barishal.barishal-police-station',compact('information_all'));
    }
    public function barishalHotel(){
        $information_all = information::where([
                    ['division','Barishal'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.barishal.barishal-hotel',compact('information_all'));
    }
//chittagong division function
    public function chittagong(){
        $chittagong_photo = allphoto::where('photo_division','Chittagong')->get(); 
        return view('frontend.division.chittagong.chittagong',compact('chittagong_photo'));
    }

    public function chittagongHistorical(){
        $information_all = information::where([
                    ['division','Chittagong'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.chittagong.chittagong-historical-places',compact('information_all'));
    }
    public function chittagongHospital(){
        $information_all = information::where([
                    ['division','Chittagong'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.chittagong.chittagong-hospital',compact('information_all'));
    }
    public function chittagongFire(){
        $information_all = information::where([
                    ['division','Chittagong'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.chittagong.chittagong-fire-service',compact('information_all'));
    }
    public function chittagongPolice(){
        $information_all = information::where([
                    ['division','Chittagong'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.chittagong.chittagong-police-station',compact('information_all'));
    }
    public function chittagongHotel(){
        $information_all = information::where([
                    ['division','Chittagong'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.chittagong.chittagong-hotel',compact('information_all'));
    }
//khulna division function
    public function khulna(){
        $khulna_photo = allphoto::where('photo_division','Khulna')->get();
        return view('frontend.division.khulna.khulna',compact('khulna_photo'));
    }

    public function khulnaHistorical(){
        $information_all = information::where([
                    ['division','Khulna'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.khulna.khulna-historical-places',compact('information_all'));
    }
    public function khulnaHospital(){
        $information_all = information::where([
                    ['division','Khulna'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.khulna.khulna-hospital',compact('information_all'));
    }
    public function khulnaFire(){
        $information_all = information::where([
                    ['division','Khulna'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.khulna.khulna-fire-service',compact('information_all'));
    }
    public function khulnaPolice(){
        $information_all = information::where([
                    ['division','Khulna'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.khulna.khulna-police-station',compact('information_all'));
    }
    public function khulnaHotel(){
        $information_all = information::where([
                    ['division','Khulna'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.khulna.khulna-hotel',compact('information_all'));
    }
//mymensingh division function
    public function mymensingh(){
        $mymensingh_photo = allphoto::where('photo_division','Mymensingh')->get();
        return view('frontend.division.mymensingh.mymensingh',compact('mymensingh_photo'));
    }

    public function mymensinghHistorical(){
        $information_all = information::where([
                    ['division','Mymensingh'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.mymensingh.mymensingh-historical-places',compact('information_all'));
    }
    public function mymensinghHospital(){
        $information_all = information::where([
                    ['division','Mymensingh'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.mymensingh.mymensingh-hospital',compact('information_all'));
    }
    public function mymensinghFire(){
        $information_all = information::where([
                    ['division','Mymensingh'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.mymensingh.mymensingh-fire-service',compact('information_all'));
    }
    public function mymensinghPolice(){
        $information_all = information::where([
                    ['division','Mymensingh'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.mymensingh.mymensingh-police-station',compact('information_all'));
    }
    public function mymensinghHotel(){
        $information_all = information::where([
                    ['division','Mymensingh'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.mymensingh.mymensingh-hotel',compact('information_all'));
    }
//rajshahi division function
    public function rajshahi(){
        $rajshahi_photo = allphoto::where('photo_division','Rajshahi')->get();
        return view('frontend.division.rajshahi.rajshahi',compact('rajshahi_photo'));
    }

    public function rajshahiHistorical(){
        $information_all = information::where([
                    ['division','Rajshahi'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.rajshahi.rajshahi-historical-places',compact('information_all'));
    }
    public function rajshahiHospital(){
        $information_all = information::where([
                    ['division','Rajshahi'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.rajshahi.rajshahi-hospital',compact('information_all'));
    }
    public function rajshahiFire(){
        $information_all = information::where([
                    ['division','Rajshahi'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.rajshahi.rajshahi-fire-service',compact('information_all'));
    }
    public function rajshahiPolice(){
        $information_all = information::where([
                    ['division','Rajshahi'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.rajshahi.rajshahi-police-station',compact('information_all'));
    }
    public function rajshahiHotel(){
        $information_all = information::where([
                    ['division','Rajshahi'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.rajshahi.rajshahi-hotel',compact('information_all'));
    }
//rangpur division function
    public function rangpur(){
        $rangpur_photo = allphoto::where('photo_division','Rangpur')->get();
        return view('frontend.division.rangpur.rangpur',compact('rangpur_photo'));
    }

    public function rangpurHistorical(){
        $information_all = information::where([
                    ['division','Rangpur'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.rangpur.rangpur-historical-places',compact('information_all'));
    }
    public function rangpurHospital(){
        $information_all = information::where([
                    ['division','Rangpur'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.rangpur.rangpur-hospital',compact('information_all'));
    }
    public function rangpurFire(){
        $information_all = information::where([
                    ['division','Rangpur'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.rangpur.rangpur-fire-service',compact('information_all'));
    }
    public function rangpurPolice(){
        $information_all = information::where([
                    ['division','Rangpur'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.rangpur.rangpur-police-station',compact('information_all'));
    }
    public function rangpurHotel(){
        $information_all = information::where([
                    ['division','Rangpur'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.rangpur.rangpur-hotel',compact('information_all'));
    }
//sylhet division function
    public function sylhet(){
        
        $sylhet_photo = allphoto::where('photo_division','Sylhet')->get();
        return view('frontend.division.sylhet.sylhet',compact('sylhet_photo'));
    }

    public function sylhetHistorical(){
        $information_all = information::where([
                    ['division','Sylhet'],
                    ['area','Historical Place']
                    ])->get();
        return view('frontend.division.sylhet.sylhet-historical-places',compact('information_all'));
    }
    public function sylhetHospital(){
        $information_all = information::where([
                    ['division','Sylhet'],
                    ['area','Hospital']
                    ])->get();
        return view('frontend.division.sylhet.sylhet-hospital',compact('information_all'));
    }
    public function sylhetFire(){
        $information_all = information::where([
                    ['division','Sylhet'],
                    ['area','Fire Service']
                    ])->get();
        return view('frontend.division.sylhet.sylhet-fire-service',compact('information_all'));
    }
    public function sylhetPolice(){
        $information_all = information::where([
                    ['division','Sylhet'],
                    ['area','Police Station']
                    ])->get();
        return view('frontend.division.sylhet.sylhet-police-station',compact('information_all'));
    }
    public function sylhetHotel(){
        $information_all = information::where([
                    ['division','Sylhet'],
                    ['area','Hotel']
                    ])->get();
        return view('frontend.division.sylhet.sylhet-hotel',compact('information_all'));
    }

    
}
