<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function univ(){
        return view('admin.univ');
    }

    public function project(){
        return view('admin.project');
    }
    
    public function selection(){
        return view('admin.selection');
    }

    public function info(){
        return view('admin.info');
    }

    public function editproject(){
        return view('admin.editproject');
    }

    
    public function detailmhs(){
        return view('admin.detailmhs');
    }

    public function projectreq(){
        return view('admin.projectreq');
    }

    public function addproject(){
        return view('admin.addproject');
    }

    
    public function partnereq(){
        return view('admin.partnereq');
    }
}
