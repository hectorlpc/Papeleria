<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\publicidad;

class publicidadController extends Controller
{
    //
    public function index(){
        $publicidades= publicidad::all();
        return view('Publicidad.index',compact('publicidades'));
    }
      
    public function create(){
        return view('Publicidad.create');
    }
    
    public function edit($id){
        $publicidades= publicidad::find($id);
        return view('Publicidad.edit',compact('publicidades'));
    }
    
    public function store(Request $request){
        $publicidades= new publicidad();
        $publicidades->Desc_Publicidad= $request->input('Desc_Publicidad');
        if ($request->file('img')) {
          # code...
          $path=Storage::disk('public')->put('images',$request->file('img'));
          $publicidades->img=$path;
        }
        $publicidades->save();
        return redirect()->route('Publicidad')
        ->with('info','Se Creo con exito');
    }
    
    public function update(Request $request,$id){
          $publicidades= publicidad::find($id);
          $publicidades->Desc_Publicidad= $request->input('Desc_Publicidad');
          if ($request->file('img')) {
            # code...
            $path=Storage::disk('public')->put('images',$request->file('img'));
            $publicidades->img=$path;
          }
          $publicidades->save();
          return redirect()->route('Publicidad')
          ->with('info','Se Modificado con exito');
    }

    public function destroy($id){
        $publicidades= publicidad::find($id);
        $publicidades->delete();
        return redirect()->route('Publicidad')
        ->with('eli','Se Elimino Con Exito');
    }
    
 
}
