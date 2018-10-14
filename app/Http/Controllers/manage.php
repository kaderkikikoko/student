<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class manage extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function addart(Request $request){
            if ($request->ismethod('post')) {
            $newart=new Article();
            $newart->tit=$request->input('title');
            $newart->art=$request->input('article');
            $newart->user_id= Auth::user()->id;
             $newart->writer= Auth::user()->name;
            $newart->save();
            return redirect('viewart');

            }


    	return view ('manage.addart');

    }

    public function viewart(){
    	$vi=Article ::all();
    	$arr = array('view' =>$vi);
 		return view('manage.viewart',$arr);

    }


    public function read(Request $request,$id){
    	if ($request ->ismethod('post')){
       $col= new Comment();
                $col->comm =$request->input('body');
         $col->art_id =$id;
 $col->name= Auth::user()->name;
         $col->save();

    	}
    	     

       $articl=Article ::find($id);
      $arr = array('article' => $articl, );
 $artic=Comment ::all();
       $ar = array('artic' => $artic);
    	return view ('manage.read',$arr,$ar);


    }

     public function read1(Request $request,$id){
    	
    	     
       
        $artic=Comment ::all();
       $ar = array('artic' => $artic);
    	return view ('manage.read1',$ar);

    }
  
}
