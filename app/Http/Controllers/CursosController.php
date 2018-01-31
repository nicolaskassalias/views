<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    // action -> trata uma requisicao
    public function index(){
      $cursos=["Mat","Fis","Qui"];
      return view('/cursos',compact('cursos'));
    }
}
