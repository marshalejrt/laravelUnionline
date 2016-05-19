<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ControladorUsuario extends Controller
{
    public function postAgregarUsuario(Request $request)
    {
        $op=$request["operacion"];
        if ($op=="AGREGA"){
            $this->validate($request, [
                'email' => 'required|unique:usuarios|email',
                'nombre' => 'required|max:50|min:4',
                'apellido' => 'required|max:50|min:4',
                'password' => 'required|min:5|max:10|confirmed',
                'tipousuario_id' => 'required|integer'
            ]);
            $usuario = new Usuario();
            $usuario->nombre = $request["nombre"];
            $usuario->apellido = $request["apellido"];
            $usuario->email = $request["email"];
            $usuario->tipousuario_id = $request["tipousuario_id"];
            $usuario->password = bcrypt($request["password"]);
            $usuario->save();
            return redirect()->back()->with(['informacion' =>'Registro agregado con Satisfactoriamente...']);
        }else{//MODIFICA UN REGISTRO
            $this->validate($request, [
                'nombre' => 'required|max:50|min:4',
                'apellido' => 'required|max:50|min:4',
                'password' => 'required|min:5|max:10|confirmed',
                'tipousuario_id' => 'required|integer'
            ]);
            if ($usuario = Usuario::find($request["id"])) {
                $usuario->nombre = $request["nombre"];
                $usuario->apellido = $request["apellido"];
                $usuario->email = $request["email"];
                $usuario->tipousuario_id = $request["tipousuario_id"];
                $usuario->password = bcrypt($request["password"]);
                $usuario->update();
                return redirect()->back()->with(['informacion' => 'El Registro se ha Modificado satisfactoriamente...']);
            }
            return redirect()->back()->with(['informacion' =>'Ocurrio un Error al Modificar el Registro, Verifique...']);
        }

    }

    public function getEliminarUsuario($id)
    {
        if (!$usuario = Usuario::find($id)) {
            return redirect()->back()->with(['informacion' => 'Ocurrio un Error al intentar Eliminar el Registro, Verifque...', 'tipo' => 'error']);
        }
        $usuario->delete();
        return redirect()->back()->with(['informacion' => 'El Registro se ha eliminado satisfactoriamente...', 'tipo' => 'ok']);
    }


}
