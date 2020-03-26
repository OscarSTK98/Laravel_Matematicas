<?php

use Illuminate\Support\Facades\Route;

//Vistas con funcionalidad
Route::get('/', function () {
    return view('main');
}); //->name('Nombre de un identificador para href's')

Route::get('Material','MaterialController@index')->name('Material'); //Nombre en etiqueta

//View es para cuando no me voy a traer datos
//Route::view('Alumnos','Subida')->name('Alumnos'); //Vista de subida de archivos de alumnos
Route::view('Profesores','Login')->name('Login'); //Vista de login