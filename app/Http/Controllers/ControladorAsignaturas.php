<?php

namespace App\Http\Controllers;

use App\Asignatura;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ControladorAsignaturas extends Controller
{
    public function postAgregarAsignatura(Request $request)
    {
        $op=$request["operacion"];
        if ($op=="AGREGA"){
            $this->validate($request, [
                'nombre' => 'required|max:100|min:4',
                'valor' => 'integer|required'
            ]);
            $asignatura = new Asignatura();
            $asignatura->nombre = $request["nombre"];
            $asignatura->valor = $request["valor"];
            $asignatura->save();
            return redirect()->back()->with(['informacion' =>'Registro agregado con Satisfactoriamente...']);
        }else{//MODIFICA UN REGISTRO
            $this->validate($request, [
                'nombre' => 'required|max:100|min:4',
                'valor' => 'required|integer'
            ]);
            if ($asignatura = Asignatura::find($request["id"])) {
                $asignatura->nombre = $request["nombre"];
                $asignatura->valor = $request["valor"];
                $asignatura->update();
                return redirect()->back()->with(['informacion' => 'El Registro se ha Modificado satisfactoriamente...']);
            }
            return redirect()->back()->with(['informacion' =>'Ocurrio un Error al Modificar el Registro, Verifique...']);
        }

    }

    public function getEliminarAsignatura($id)
    {
        if (!$asignatura = Asignatura::find($id)) {
            return redirect()->back()->with(['informacion' => 'Ocurrio un Error al intentar Eliminar el Registro, Verifque...', 'tipo' => 'error']);
        }
        $asignatura->delete();
        return redirect()->back()->with(['informacion' => 'El Registro se ha eliminado satisfactoriamente...', 'tipo' => 'ok']);
    }
}
