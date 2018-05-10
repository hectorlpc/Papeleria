<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categoria;

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
    $categorias= categoria::all();
    return view('welcome',compact('categorias'));

  }
}
