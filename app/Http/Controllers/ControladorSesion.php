<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Asignatura;
use App\Tipousuario;
use App\Usuario;


use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use DB;
class ControladorSesion extends Controller
{
    public function postIngresar(Request $request)
    {
        $this->validate($request, [
            'email'=>'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request["email"], 'password' => $request["password"]])) {
            return redirect()->route('index');
        }
//        return redirect()->back();
        return redirect()->route('index');
    }

}
