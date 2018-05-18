<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;
use App\publicidad;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
  public function principal()
  {
    $publicidades= publicidad::all();
    $categorias= categoria::all();
    return view('welcome',['categorias'=>$categorias,'publicidades'=>$publicidades]);

  }
}
