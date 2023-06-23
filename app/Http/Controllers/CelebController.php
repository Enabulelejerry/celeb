<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Celeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;

class CelebController extends Controller
{
     public function AddCeleb(){
        return view('admin.celeb.add');
     }

     public function StoreCeleb(Request $request){
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:1024',
            'description' => 'required'
            
          ]);

          $image = $request->file('image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
         $destinationPath = 'image/celeb_img';
         if(!File::isDirectory($destinationPath)){
            File::makeDirectory($destinationPath, 007, true, true);
         }

         Image::make($image)->save($destinationPath.'/'.$name_gen);
          $img_path = $destinationPath.'/'.$name_gen;

          $celeb = new Celeb();
          $celeb->first_name = $request->first_name;
          $celeb->last_name = $request->last_name;
          $celeb->category = $request->cele_cat;
          $celeb->description = htmlentities($request->description);
          $celeb->image = $img_path;
          $celeb->save();

          $notification = array(
            'message' => 'celeb profile created Successfully',
            'alert-type' => 'success'
         );
         return redirect()->route('celeb.view')->with($notification);
     }


     public function UpdateCeleb(Request $request,$id){
        $validateData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'description' => 'required'
            
          ]);

         
          $celeb = Celeb::find($id);
          $celeb->first_name = $request->first_name;
          $celeb->last_name = $request->last_name;
          $celeb->description = htmlentities($request->description);
          if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $destinationPath = 'image/celeb_img';
            if(!File::isDirectory($destinationPath)){
               File::makeDirectory($destinationPath, 007, true, true);
            }
   
            Image::make($image)->save($destinationPath.'/'.$name_gen);
             $img_path = $destinationPath.'/'.$name_gen;
             $celeb->image = $img_path;
          }
          
          $celeb->save();
          $notification = array(
            'message' => 'celeb profile updated Successfully',
            'alert-type' => 'success'
         );
         return redirect()->route('celeb.view')->with($notification);
     }

     public function ViewCeleb(){

        $data['celebs'] = Celeb::orderBy('id','desc')->get();
        return view('admin.celeb.view',$data); 
     }

     public function EditCeleb($id){
        $data['celeb'] = Celeb::where('id',$id)->first();
        return view('admin.celeb.edit',$data); 
     }

     public function DeleteCeleb($id){
        $celeb = Celeb::find($id);
        if(file_exists($celeb->image)){
            unlink($celeb->image);
          }
          $celeb->delete();
        $notification = array(
            'message' => 'celeb profile deleted successfully',
            'alert-type' => 'success'
         );
         return redirect()->route('celeb.view')->with($notification);
     }

     public function GetBooking(){
        $data['bookings'] = Booking::orderBy('id','desc')->get();
        return view('admin.celeb.booking',$data);
     }


}
