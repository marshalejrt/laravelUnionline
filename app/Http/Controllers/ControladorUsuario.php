<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;

class ControladorUsuario extends Controller
{
    public function postIniciarSesion(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email' => $request["email"], 'password' => $request["password"]])) {
            return redirect()->route('inicio');
        }
        return redirect()->back();
    }

    public function postAgregarUsuario(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|min:5',
            'apellido' => 'required|min:5',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|min:5|max:20|confirmed',
            'tipousuario_id' => 'required|integer',
        ]);
        $usuario = new Usuario();
        $usuario->nombre = $request["nombre"];
        $usuario->apellido = $request["apellido"];
        $usuario->email = $request["email"];
        $usuario->tipousuario_id = $request["tipousuario_id"];
        $usuario->password = bcrypt($request["password"]);
        $usuario->save();
        return redirect()->back();
    }

    public function getBorrarUsuario($id)
    {

        if (!$usuario = Usuario::find($id)) {
            return redirect()->back()->with(['interaccion' => 'No se encontro el Usuario, Intente Nuevamente...', 'tipomensaje' => 'error']);
        }
        $usuario->delete();
        return redirect()->back()->with(['interaccion' => 'Registro Eliminado Satisfactoriamente...', 'type' => 'success']);
    }



}
