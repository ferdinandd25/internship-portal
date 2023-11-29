<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivController extends Controller
{
    public function profile(){
        return view('university.profile');
    }
    public function list(){
        return view('university.list');
    }
    public function editmhs(){
        return view('university.editmhs');
    }
}
