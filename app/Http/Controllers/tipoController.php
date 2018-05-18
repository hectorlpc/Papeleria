<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//modelos
use App\tipo_producto;
use App\categoria;

class tipoController extends Controller
{
    //
    public function index(){
        $tipos=tipo_producto::all();
        return view('Tipo.index',compact('tipos'));
    }
    
    public function create(){
        $categorias=categoria::all();
        return view('Tipo.create',compact('categorias'));
      }
    
    public function edit($id){
        $tipos=tipo_producto::find($id);
        $categorias=categoria::all();
        return view('Tipo.edit',['tipos'=>$tipos,'categorias'=>$categorias]);
    } 
    
    public function destroy($id){
        $tipos= tipo_producto::find($id);
        $tipos->delete();
        return redirect()->route('Tipo')
        ->with('eli','Se Elimino Con Exito');
      }
    public function store(Request $request){
        $tipo= new tipo_producto();
        $tipo->Nombre= $request->input('Nombre');
        $tipo->Desc_Tipo= $request->input('Desc_Tipo');
        if ($request->file('img')) {
          # code...
          $path=Storage::disk('public')->put('images',$request->file('img'));
          $tipo->img=$path;
        }
        $tipo->id_categoria=$request->input('id_categoria');
        $tipo->save();
        return redirect()->route('Tipo')
        ->with('info','Se Creo con exito');
    }
    
    public function update(Request $request,$id){
        $tipo= tipo_producto::find($id);
          $tipo->Nombre= $request->input('Nombre');
          $tipo->Desc_Tipo= $request->input('Desc_Tipo');
          if ($request->file('img')) {
            # code...
            $path=Storage::disk('public')->put('images',$request->file('img'));
            $tipo->img=$path;
          }
            $tipo->id_categoria=$request->input('id_categoria');
          $tipo->save();
          return redirect()->route('Tipo')
          ->with('info','Se Modificado con exito');

    }
    
}
