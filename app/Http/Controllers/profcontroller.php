<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class profcontroller extends Controller
{
    //
    public function profdashboard(){
        $info = array();
        if (Session::has('loginId')){
            $info = Professor::where('id', '=', Session::get('loginId'))->first();
        }
        return view('profdashboard', compact('info'));
    }

    /*
    public function listestagiaires(){
        $info = array();
        if (Session::has('loginId')){
            $info = Professor::where('id', '=', Session::get('loginId'))->first();
        }
        return view('listestagiares', compact('info'));
    }
    */

    public function index(){

        $information=student::all();
        return view('listestagiaires',['stagiaires'=>$information]);
    }

    public function showData($id){

        $information=student::find($id);
        return view('show',['stagiaire'=>$information]);

    }
    public function delete($id){

        $information=student::find($id);
        $information->delete();
        return redirect('listestagiaires');

    }

    public function registration(){
        return view('/registerstagiaire');
    }

    public function store(Request $request){

        $this->validate($request,[
            'Nom' => 'required',
            'Prénom' => 'required',
            'email' => 'required',
            'password' => 'required',
            'Encadrant_nom' => 'required',
            'sujet' => 'required',
            'num' => 'required',

        ]);
        student::create($request->except('_token'));
        return redirect('listestagiaires')->with(['success' => 'stagiaire ajouté' ]);

    }






}
