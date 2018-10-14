<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class adminstudent extends Controller
{
    //
 public function view (){
$stud=Student :: orderBy('created_at','desc')->get();
$arr = array('student' =>$stud);

 	return view('viewstudent',$arr);
 }
 public function add(Request $request){
 	if ($request -> ismethod('post')) {
 		$stu= new Student();
 		$stu->name =$request->input('nameadd');
 			$stu->adress =$request->input('adressadd');
 			$stu -> save();
 			return redirect('view');
 			
 	}

return view('add');

 	
 }

public function edit(Request $request,$id){
if ($request ->ismethod('post')) {
	$edi=Student ::find($id);
    $edi->name=$request->input('nameedit');
    $edi->adress=$request->input('adressedit');
    $edi->save();
    return redirect('view');
}
else
{
	$editst=Student ::find($id);

$arra = array('editst' =>$editst );
	return view ('edit',$arra);
}

}




}
