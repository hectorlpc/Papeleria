<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//modelos
use App\edificio;
use Illuminate\Support\Facades\Storage;


class edificioController extends Controller{
    //
    public function index(){
        $edi=edificio::all();
        return view('Edificio.index',compact('edi'));
    }
    
    public function create(){
        $edi=edificio::all();
        return view('Edificio.create',compact('edi'));
    }
    
    public function edit($id){
        $edi=edificio::find($id);
        return view('Edificio.edit',compact('edi'));
    }
    
    
    
    public function store(Request $request){
        $edi= new edificio();
        $edi->Nombre_edificio= $request->input('Nombre_edificio');
        $edi->No_plantas= $request->input('No_plantas');
        $edi->save();
        return redirect()->route('Edificio')
        ->with('info','Se Creo con exito');
      }
    
     public function update(Request $request,$id){
          $edi= edificio::find($id);
          $edi->Nombre_edificio= $request->input('Nombre_edificio');
          $edi->No_plantas= $request->input('No_plantas');
          $edi->save();
          return redirect()->route('Edificio')
          ->with('info','Se Modificado con exito');
      }
    
    
    
    
    public function destroy($id){
        $edi=edificio::find($id);
        $edi->delete();
        return redirect()->route('Edificio')
        ->with('eli','Se Elimino Con Exito');
    }
    
}