<?php

use Illuminate\Support\Facades\Route;

Route::get('/',
 function () {
    
    return view('hola');
            }

);

// Route::get('/prueba',function(){
//     return view('hola');
// });




// Route::get('/empleados',function(){
//         $empleados=['Id'=>'E001','Nombre'=>'Juan Perez','Salario'=>5000];

//         return $empleados;
// });

// Route::get('/mensaje',function(){
//     return '<h1>Este es un mensaje desde la ruta</h1>';
// });


// Route::get('/mensaje/datos',function(){
//     $datos=['Enero','Febrero','Marzo','Abril'];
//     return $datos;
// });

// Route::get('/mensaje/{nombre}',
// function($captura){
//     return 'Hola '.$captura.' Bienvenido';
// });

// Route::get('/alumnos/{nombre?}',function($alm='Alumno Invitado'){
//   return 'Hola '.$alm;
// });


// route::get('/alumno',function(){
//     return view('alumno');
// });

// Route::get('/alumno/create',function(){
//     return 'Estoy en la vista de crear Alumno';
// });

// Route::get('/alumno/edit',function(){
//     return 'Estoy en la vista de editar Alumno';
// });

// Route::get('/alumno/eliminar',function(){
//     return 'Estoy en la vista de eliminar Alumno';
// });

// Route::get('/enviar/{nombre}',
// function($captura){
//     return view('hola')->with('xx',$captura);
// });

// Route::get('/prueba','App\Http\Controllers\PruebaController@index');

// Route::get('/alumno','App\Http\Controllers\AlumnoController@index');

Route::resource('/alumno','App\Http\Controllers\AlumnoController');

Route::resource('/cliente','App\Http\Controllers\ClienteController');

Route::resource('/telefono','App\Http\Controllers\TelefonoController');

Route::get('/telefono/crear/{x}','App\Http\Controllers\TelefonoController@crear');

Route::get('/telefono/eliminar/{x}','App\Http\Controllers\TelefonoController@Eliminar');