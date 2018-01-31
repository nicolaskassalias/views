<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//requisicao GET
//o usuario digita a
Route::get('/', function () {

    return view('welcome');
    //$cursos=['mat','fis','quim'];
    //$nome="Mara Maravilha! ";
    //return view('ola',[minhavar=> $nome]);
    //compact('nome') -> ['nome' =>$nome]
    //return view('ola',compact('nome'));
});
/*
Route::get('/meusCursos', function () {
  $outrosCursos=["Mat","Fis","Qui"];
  return view('meusCursos',compact('outrosCursos'));
});
*/
Route::get('/cursos', 'CursosController@index');
// rota para a página ola
Route::get('/ola', function(){
   return view('ola');
});
