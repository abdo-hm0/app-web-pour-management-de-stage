<?php

namespace App\Http\Controllers;



use App\Models\student;
use Illuminate\Http\Request;


class CustomAuthController extends Controller
{
    //
    public function login(){
            return view("auth.login");
    }

    public function loginstudent(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:2|max:12'

        ]);

        $student = student::where('email','=',$request->email)->first();
        if($student){
            if($request->password==$student->password){
                $request->session()->put('loginId',$student->id);
                return redirect('/dashboard');
            }
            else{
                return back()->with('fail','ce mot de pass est incorrect');
            }
        }
        else{
            return back()->with('fail','Cet email est incorrect');
        }
    }

    
}
