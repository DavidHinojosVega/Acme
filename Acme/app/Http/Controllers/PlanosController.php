<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;
use App\Models\Proyecto;
use App\Models\Zona;
use App\Models\Cliente;


class PlanosController extends Controller
{
public function getPlanos(){
        //SELECT * FROM USERS
        $data = Plano:: all();
        $pedidos = Proyecto:: all();
        $zona = Zona:: all();
        $cliente = Cliente:: all();

       // dd($data);
   return view("admin.Planos")
    ->with('flats', $data)
    ->with('zona', $zona)
    ->with('pedidos', $pedidos)
    ->with('cliente', $cliente);
    }

     public function createPlanos(Request $request){
       
       $request->validate([
        "nombre"=>'required',
        "zona"=>'required',
        "proyecto_id"=>'required',
        "contraseña"=>'required|min:3',
       ]);
       //GUARDAR REGISTRO
       $flat = new Plano();
       $flat->nombre=$request->nombre;
       $flat->zona_id=$request->zona;
       $flat->img='default.jpg';
       $flat->tipo_de_acceso='Admin';
       $flat->fecha_actualizacion_anterior=date('Y-m-d');
       $flat->fecha_actualizacion=date('Y-m-d');
       $flat->contraseña = $request -> contraseña;
       $flat->proyecto_id= $request->proyecto_id;
       $flat->save();

       return redirect()
            ->back()
            ->with('success','Registro insertado correctamente.');
    }

}