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

Route::post('/agregarUsuario', [
    'uses' => 'ControladorUsuario@postAgregarUsuario',
    'as' => 'agregarUsuario'
]);

Route::get('/adminusuarios', function(){
    $tipos_usuario=\App\Tipousuario::all();
    $usuarios=\App\Usuario::all();
    return view('adminusuarios')->with(['tipos_usuario'=>$tipos_usuario, 'usuarios'=>$usuarios]);
})->name('adminusuarios');