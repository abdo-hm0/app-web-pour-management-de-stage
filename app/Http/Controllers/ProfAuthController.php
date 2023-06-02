<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;

class ProfAuthController extends Controller
{
    //
    public function loginprofessor(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:2|max:12'

        ]);
        $professor = Professor::where('email','=',$request->email)->first();
        if($professor){
            if($request->password==$professor->password){
                $request->session()->put('loginId',$professor->id);
                return redirect('/profdashboard');
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
