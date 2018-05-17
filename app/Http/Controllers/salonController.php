<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\salon;

class salonController extends Controller
{
  public function index()
  {
    $salones= Salon::all();
    return view('Salon.index',compact('salones'));
  }

  public function create()
  {
    return view('Salon.create');
  }

  public function edit($id)
  {
    $salon=Salon::find($id);
    return view('Salon.edit',compact('salon'));
  }

  public function store(Request $request)
  {
    $salon= new Salon();
    $salon->id= $request->input('id');
    $salon->id_edificio= $request->input('id_edificio');
    $salon->piso= $request->input('piso');
    $salon->save();
    return redirect()->route('Salon')
    ->with('info','Se Creo con exito');
  }

  public function update(Request $request,$id)
  {
      $salon= Salon::find($id);
      $salon->id= $request->input('id');
      $salon->id_edificio= $request->input('id_edificio');
      $salon->piso= $request->input('piso');
      $salon->save();
      return redirect()->route('Salon')
      ->with('info','Se Modificado con exito');
  }

  public function destroy($id)
  {
    $salon= Salon::find($id);
    $salon->delete();
    return redirect()->route('Salon')
    ->with('eli','Se Elimino Con Exito');
  }
  public function buscar(Request $request)
      {
        $buscar=$request->input('buscar');
        $salones= Salon::where('id', $buscar)->get();
        return view('Salon.index',compact('salones'));
      }
}
