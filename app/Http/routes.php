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

//-----------------RUTAS USUARIOS-----------------------------------------
Route::get('/adminusuarios', function(){
    $tipos_usuario=\App\Tipousuario::all();
    $usuarios=\App\Usuario::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('adminusuarios')->with(['tipos_usuario'=>$tipos_usuario, 'usuarios'=>$usuarios,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('adminusuarios')->middleware('auth');

Route::post('/agregarUsuario', [
    'uses' => 'ControladorUsuario@postAgregarUsuario',
    'as' => 'agregarUsuario',
    'middleware' => 'auth'
]);

Route::get('/eliminarUsuario/{id}', [
    'uses' => 'ControladorUsuario@getEliminarUsuario',
    'as' => 'eliminarUsuario',
    'middleware' => 'auth'
]);
//-----------------RUTAS ASIGNATURAS-----------------------------------------
Route::get('/adminusasignaturas', function(){
    $asignaturas=\App\Asignatura::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('adminasignaturas')->with([ 'asignaturas'=>$asignaturas,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('adminasignaturas')->middleware('auth');

Route::post('/agregarAsignatura', [
    'uses' => 'ControladorAsignaturas@postAgregarAsignatura',
    'as' => 'agregarAsignatura',
    'middleware' => 'auth'
]);

Route::get('/eliminarAsignatura/{id}', [
    'uses' => 'ControladorAsignaturas@getEliminarAsignatura',
    'as' => 'eliminarAsignatura',
    'middleware' => 'auth'
]);
//-----------------RUTAS INSCRIPCION DE MATERIAS-----------------------------------------
Route::get('/inscribirmaterias', function(){
    $asignaturas=\App\Asignatura::all();
    $tipos_usuario=\App\Tipousuario::all();
    $usuarios=\App\Usuario::all();
    $mensaje='';
    $accion='';
    $estilo='';
    $estamodificando=false;
    return view('inscripciones')->with(['asignaturas'=>$asignaturas,'tipos_usuario'=>$tipos_usuario, 'usuarios'=>$usuarios,'mensaje'=>$mensaje,'accion'=>$accion,'estilo'=>$estilo,'estamodificando'=>$estamodificando]);
})->name('inscribirmaterias');


//-----------------RUTAS INICIO DE SESION-----------------------------------------
Route::get('/inicio', function () {
    return view('index');
})->name('index')->middleware('auth');


Route::post('/ingresar', [
    'uses' => 'ControladorSesion@postIngresar',
    'as' => 'ingresar'
]);
Route::get('/logout', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get('/login', function () {
    return view('login');
})->name('login');

