<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
// return view('welcome');
//});

//Route::get('/', function(){
//    return view('home');
//});

Route::view('/', 'home');

Route::get('/produtos', function(){
    return view('Produtos');
});

Route::get('/produtos/{NomeProduto}/comentario/(id)', function($NomeProduto, $id){
    echo "Este é o comentario: ".$id.", do Produto: ".$NomeProduto;
});


//www.site.com.br/produtos
