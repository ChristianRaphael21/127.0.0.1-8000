<?php

use Illuminate\Support\Facades\Route;

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
