<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_producto;
class principalController extends Controller
{

  public function index($id)
  {
      $tipos= tipo_producto::where('id_categoria', $id)->get();
      return view('tipo',['tipos'=>$tipos]);
  }
}
