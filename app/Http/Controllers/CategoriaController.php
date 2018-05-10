<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//paso 2 importar el modelo
use App\categoria;

class CategoriaController extends Controller
{
      public function index()
      {
        $categorias= categoria::all();
        return view('Categoria.index',compact('categorias'));
      }
      public function create()
      {
        return view('Categoria.create');
      }
      public function edit($id)
      {
        $categoria= categoria::find($id);
        return view('Categoria.edit',compact('categoria'));
      }
      public function store(Request $request)
      {
        $categoria= new categoria();
        $categoria->Nombre= $request->input('Nombre');
        $categoria->Desc_Categoria= $request->input('Desc_Categoria');
        if ($request->file('img')) {
          # code...
          $path=Storage::disk('public')->put('images',$request->file('img'));
          $categoria->img=$path;
        }
        $categoria->save();
        return redirect()->route('Categoria')
        ->with('info','Se Creo con exito');
      }
      public function update(Request $request,$id)
      {
          $categoria= categoria::find($id);
          $categoria->Nombre= $request->input('Nombre');
          $categoria->Desc_Categoria= $request->input('Desc_Categoria');
          if ($request->file('img')) {
            # code...
            $path=Storage::disk('public')->put('images',$request->file('img'));
            $categoria->img=$path;
          }
          $categoria->save();
          return redirect()->route('Categoria')
          ->with('info','Se Modificado con exito');
      }
      public function destroy($id)
      {
        $categoria= categoria::find($id);
        $categoria->delete();
        return redirect()->route('Categoria')
        ->with('eli','Se Elimino Con Exito');
      }
}
