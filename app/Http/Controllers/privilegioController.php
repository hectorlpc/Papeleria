<?php

namespace App\Http\Controllers;
use App\Privilegio;

use Illuminate\Http\Request;

class privilegioController extends Controller
{
  public function index()
  {
    $privilegios= Privilegio::all();
    return view('Privilegio.index',compact('privilegios'));
  }

  public function create()
  {
    return view('Privilegio.create');
  }

  public function edit($id)
  {
    $privilegio= Privilegio::find($id);
      return view('Privilegio.edit',compact('privilegio'));
  }

  public function store(Request $request)
  {
    $privilegio= new Privilegio();
    $privilegio->Nombre= $request->input('Nombre');
    $privilegio->privilegio= $request->input('privilegio');
    $privilegio->save();
    return redirect()->route('Privilegio')
    ->with('info','Se Creo con exito');
  }

  public function update(Request $request,$id)
  {
      $privilegio= Privilegio::find($id);
      $privilegio->Nombre= $request->input('Nombre');
      $privilegio->privilegio= $request->input('privilegio');
      $privilegio->save();
      return redirect()->route('Privilegio')
      ->with('info','Se Modificado con exito');
  }

  public function destroy($id)
  {
    $privilegio= Privilegio::find($id);
    $privilegio->delete();
    return redirect()->route('Privilegio')
    ->with('eli','Se Elimino Con Exito');
  }
  public function buscar(Request $request)
    {
      $buscar=$request->input('buscar');
      $privilegios= Privilegio::where('Nombre', $buscar)->get();
      return view('Privilegio.index',compact('privilegios'));
    }
}
