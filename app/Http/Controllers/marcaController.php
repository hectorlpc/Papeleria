<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;

class marcaController extends Controller
{
      public function index()
      {
        $marcas= marca::all();
        return view('Marca.index',compact('marcas'));
      }
      public function create()
      {
        return view('Marca.create');
      }
      public function edit($id)
      {
        $marca= marca::find($id);
        return view('Marca.edit',compact('marca'));
      }
    
    public function store(Request $request)
      {
        $marca= new marca();
        $marca->Nombre= $request->input('Nombre');
        
        
        $marca->save();
        return redirect()->route('Marca')
        ->with('info','Se Creo con exito');
      }
      public function update(Request $request,$id)
      {
          $marca= marca::find($id);
          $marca->Nombre= $request->input('Nombre');
          
         
          $marca->save();
          return redirect()->route('Marca')
          ->with('info','Se Modificado con exito');
      }
      public function destroy($id)
      {
        $marca= marca::find($id);
        $marca->delete();
        return redirect()->route('Marca')
        ->with('eli','Se Elimino Con Exito');
      }
    public function buscar(Request $request){
        $buscar=$request->input('buscar');
        $marca=marca::where('Nombre', $buscar)->get();
        return view('Marca.index',compact('marcas'));
    }
}
