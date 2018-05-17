<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;

class proveedorController extends Controller
{
    public function index()
      {
        $proveedores= proveedor::all();
        return view('Proveedor.index',compact('proveedores'));
      }
      public function create()
      {
        return view('Proveedor.create');
      }
      public function edit($id)
      {
        $proveedor= proveedor::find($id);
        return view('Proveedor.edit',compact('proveedor'));
      }
    
    public function store(Request $request)
      {
        $proveedor= new proveedor();
        $proveedor->Nombre= $request->input('Nombre');
        $proveedor->Telefono= $request->input('Telefono');
        $proveedor->Email= $request->input('Email');
      
        
        $proveedor->save();
        return redirect()->route('Proveedor')
        ->with('info','Se Creo con exito');
      }
      public function update(Request $request,$id)
      {
          $proveedor= proveedor::find($id);
          $proveedor->Nombre= $request->input('Nombre');
          $proveedor->Telefono= $request->input('Telefono');
          $proveedor->Email= $request->input('Email');
          
         
          $proveedor->save();
          return redirect()->route('Proveedor')
          ->with('info','Se Modificado con exito');
      }
      public function destroy($id)
      {
        $proveedor= proveedor::find($id);
        $proveedor->delete();
        return redirect()->route('Proveedor')
        ->with('eli','Se Elimino Con Exito');
      }
    public function buscar(Request $request){
        $buscar=$request->input('buscar');
        $proveedor=proveedor::where('Nombre', $buscar)->get();
        return view('Proveedor.index',compact('proveedores'));
    }
    
}
