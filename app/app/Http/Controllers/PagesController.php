<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
    public function index(){
        return view('main');
    }

    public function Material(){

        $Materiales = App\Material::all();

        return view('Material',compact('Materiales'));
    }

}
