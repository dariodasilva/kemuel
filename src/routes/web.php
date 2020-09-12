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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kemuel/', function ($nome) {
    return view('welcomeKemuel');
});


Route::get('/dario/{nome?}', function ($nome=null) {
//    return "O seu nome é, $nome";
    if(isset($nome)){
        return "O seu nome é, $nome";
    }else{
        return "Nenhum nome foi digitado";
    }
});
