<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metodo_Pago;

class metodopagoController extends Controller
{
  public function index()
  {
    $metodopagos= Metodo_Pago::all();
    return view('Metodo.index',compact('metodopagos'));
  }

  public function create()
  {
    return view('Metodo.create');
  }

  public function edit($id)
  {
    $metodopago= Metodo_Pago::find($id);
    return view('Metodo.edit',compact('metodopago'));
  }

  public function store(Request $request)
  {
    $metodopago= new Metodo_Pago();
    $metodopago->Nombre= $request->input('Nombre');
    $metodopago->save();
    return redirect()->route('Metodopago')
    ->with('info','Se Creo con exito');
  }

  public function update(Request $request,$id)
  {
      $metodopago= Metodo_Pago::find($id);
      $metodopago->Nombre= $request->input('Nombre');
      $metodopago->save();
      return redirect()->route('Metodopago')
      ->with('info','Se Modificado con exito');
  }

  public function destroy($id)
  {
    $metodopago= Metodo_Pago::find($id);
    $metodopago->delete();
    return redirect()->route('Metodopago')
    ->with('eli','Se Elimino Con Exito');
  }
  public function buscar(Request $request)
    {
      $buscar=$request->input('buscar');
      $metodopagos= Metodo_Pago::where('Nombre', $buscar)->get();
      return view('Metodo.index',compact('metodopagos'));
    }
}
