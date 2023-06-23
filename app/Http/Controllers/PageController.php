<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Celeb;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $data['topcelebs'] = Celeb::orderBy('id','desc')->where('category','average')->limit(4)->get();
        $data['greatcelebs'] = Celeb::orderBy('id','desc')->where('category','top')->limit(10)->get();
        return view('frontend.index',$data);
    }

    public function BookPage(){
        return view('frontend.book'); 
    }

    public function CelebPage(){
        $data['topcelebs'] = Celeb::orderBy('id','desc')->get();
        return view('frontend.celebs',$data); 
    }

    public function BookCeleb(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'city' => 'required',
            'phone_number' => 'required',
            'name_of_celebrity' => 'required'
            
          ]);

          $book = new Booking();
          $book->name = $request->name;
          $book->email = $request->email;
          $book->city = $request->city;
          $book->phone_number = $request->phone_number;
          $book->name_of_celebrity = $request->name_of_celebrity;
          $book->save();
          return redirect()->back()->with('message',"Booking was successful");
    }
}
