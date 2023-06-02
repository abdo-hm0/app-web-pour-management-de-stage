<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class tachecontroller extends Controller
{
    //
    public function tache(){

        return view('studenttache');
    }

    public function affectetache(){

        return view('affectetache');
    }

}
