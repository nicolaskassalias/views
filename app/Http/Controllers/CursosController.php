<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    // action -> trata uma requisicao
    /*
    public function index(){
      $cursos=["Mat","Fis","Qui"];
      return view('/cursos',compact('cursos'));
    }
    */
    private $cursos = array(
      'Lógica de programação', 'Desenvolvimento Web com PHP',
      'Algoritmos e estrutura de dados', 'Test Driven Development'
    );

    public function index()
    {
        //  $cursos = array(
        //    'Lógica de programação', 'Desenvolvimento Web com PHP',
        //    'Algoritmos e estrutura de dados', 'Test Driven Development'
        //  );
          $cursos = $this->cursos;
          return view('cursos.index', compact('cursos'));
    }
    public function show($index) {
      $curso = $this->cursos[$index];
      return view('cursos.show', compact('curso'));
    }
}
