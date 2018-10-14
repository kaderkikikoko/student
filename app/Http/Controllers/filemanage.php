<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;

class filemanage extends Controller
{
    //
    public function file(Request $request){

if ($request ->ismethod('post')) {
  $cv=new File();
$cv->name=$request->Input('name');
  if ($request->hasfile('photo')) {
    
   $cv->photo = $request ->photo->store('image');
  }
$cv->save();
return redirect('fileview');


}
   return view('filema.file');
     

    }

     public function fileview(){
$photo=File :: orderby('created_at','desc')->get();
$arr = array('photo' =>$photo  );

   return view('filema.fileview',$arr);


    }
    public function fileadd(){


   return view('filema.add',$arr);


    }
}
