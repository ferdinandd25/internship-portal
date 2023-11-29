<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function intern(){
        return view('intern');
    }

    public function projectA(){
        return view('type.projectA');
    }

    public function projectB(){
        return view('type.projectB');
    }

    public function projectC(){
        return view('type.projectC');
    }

    public function projectD(){
        return view('type.projectD');
    }

    public function projectE(){
        return view('type.projectE');
    }

    public function newproject(){
        return view('type.newproject');
    }

    public function administration(){
        return view('administration');
    }

    public function activity(){
        return view('activity');
    }
}