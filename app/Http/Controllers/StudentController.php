<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

function getUser()
    {
        return $users=[
            1=>['name'=>'AB','city'=>'ctg'],
            2=>['name'=>'CD','city'=>'dhk'],
            3=>['name'=>'EF','city'=>'ctg'],
            4=>['name'=>'GH','city'=>'dhk'],
    
        ];
    }


class StudentController extends Controller
{
    public function getView()
    {
        $users=getuser();
        return view('welcome',['msg'=>$users]);
        // return view('welcome')->with('msg',$msgs);
    }

   

}
