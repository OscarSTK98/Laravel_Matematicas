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

        $Materiales = App\Material::join('profesors', 'materials.Profesorid', 'profesors.idProfesor')
        ->select('materials.idMaterial', 'materials.NombreArchivo', 'materials.Asignatura', 'materials.Grupo', 'materials.Acceso', 'profesors.Nombre', 'profesors.Apellidos')->get();

        return view('Material',compact('Materiales'));
    }

}
