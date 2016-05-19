<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/inicio', function(){
   return view('index');
})->name('index');

//-----------------RUTAS USUARIOS-----------------------------------------
Route::get('/adminusuarios', function(){
    $tipos_usuario=\App\Tipousuario::all();
    $usuarios=\App\Usuario::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('adminusuarios')->with(['tipos_usuario'=>$tipos_usuario, 'usuarios'=>$usuarios,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('adminusuarios');

Route::post('/agregarUsuario', [
    'uses' => 'ControladorUsuario@postAgregarUsuario',
    'as' => 'agregarUsuario'
]);

Route::get('/eliminarUsuario/{id}', [
    'uses' => 'ControladorUsuario@getEliminarUsuario',
    'as' => 'eliminarUsuario'
]);
//-----------------RUTAS ASIGNATURAS-----------------------------------------
Route::get('/adminusasignaturas', function(){
    $asignaturas=\App\Asignatura::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('adminasignaturas')->with([ 'asignaturas'=>$asignaturas,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('adminasignaturas');

Route::post('/agregarAsignatura', [
    'uses' => 'ControladorAsignaturas@postAgregarAsignatura',
    'as' => 'agregarAsignatura'
]);

Route::get('/eliminarAsignatura/{id}', [
    'uses' => 'ControladorAsignaturas@getEliminarAsignatura',
    'as' => 'eliminarAsignatura'
]);
//-----------------RUTAS INSCRIPCION DE MATERIAS-----------------------------------------
Route::get('/inscribirmaterias', function(){
    $asignaturas=\App\Asignatura::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('inscribirmaterias')->with([ 'asignaturas'=>$asignaturas,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('inscribirmaterias');
//inscribirmaterias
