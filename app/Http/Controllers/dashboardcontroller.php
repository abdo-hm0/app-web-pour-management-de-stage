<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;




class dashboardcontroller extends Controller
{
    //
    public function dashboard(){
        $data = array();
        if (Session::has('loginId')){
            $data = student::where('id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard', compact('data'));
    }
    public function studentprofile(){
        $data = array();
        if (Session::has('loginId')){
            $data = student::where('id', '=', Session::get('loginId'))->first();
        }
        return view('studentprofile', compact('data'));
    }



    




}
