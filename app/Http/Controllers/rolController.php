<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rol;

class rolController extends Controller
{
     public function index()
      {
        $roles= rol::all();
        return view('Rol.index',compact('roles'));
      }
      public function create()
      {
        return view('Rol.create');
      }
      public function edit($id)
      {
        $rol= rol::find($id);
        return view('Rol.edit',compact('rol'));
      }
    
    public function store(Request $request)
      {
        $rol= new rol();
        $rol->Nombre= $request->input('Nombre');
        $rol->Desc_Rol= $request->input('Desc_Rol');
        
        $rol->save();
        return redirect()->route('Rol')
        ->with('info','Se Creo con exito');
      }
      public function update(Request $request,$id)
      {
          $rol= rol::find($id);
          $rol->Nombre= $request->input('Nombre');
          $rol->Desc_Rol= $request->input('Desc_Rol');
         
          $rol->save();
          return redirect()->route('Rol')
          ->with('info','Se Modificado con exito');
      }
      public function destroy($id)
      {
        $rol= rol::find($id);
        $rol->delete();
        return redirect()->route('Rol')
        ->with('eli','Se Elimino Con Exito');
      }
    public function buscar(Request $request){
        $buscar=$request->input('buscar');
        $rol=rol::where('Nombre', $buscar)->get();
        return view('Rol.index',compact('roles'));
    }
}
