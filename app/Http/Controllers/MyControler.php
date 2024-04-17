<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class MyControler extends Controller
{
    // insert Data
    public function insertData(Request $req){
       $req->validate([
        'name'=>'required',
        'email'=>'required',
        'pass'=>'required',
      ]);
        $insData = new student();
        $insData->name = $req->name;
        $insData->email = $req->email;
        $insData->pass = $req->pass;
        $insData->save();
      return redirect('insert');

}
 //select
 public function selectData(){
   
  $allUsersData=student::all();
  return view ('selectUsers',compact('allUsersData'));

}
//show
public function showData($uId){
  $selectData=student::find($uId);
  return view('edit',compact('selectData'));
}
  //update
  public function updateData(Request $req,$id){
    $req->validate([
      'name'=>'required',
      'email'=>'required',
      'pass'=>'required',
    ]);
      $userData=student::find($id);
      $userData->name=$req->uName;
      $userData->email=$req->uEmail;
      $userData->save();
      return redirect('select2');



  }
}