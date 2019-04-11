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


Route::prefix('app')->group(function(){
    Route::get("/", function(){
        return "<h1>Página Main</h1>";
    });
    
    Route::get("profile", function(){
        return "<h1>Página do Perfil</h1>";
    });
    
    Route::get("about", function(){
        return "<h1>Página Sobre</h1>";
    });
});
Route::get('/olar', function(){
    return "Olar";
});

Route::redirect('/aqui', '/olar', 301);

//Passando parametros na view e rotas
Route::view('/hello', 'hello');
Route::view('/viewnome', 'hellonome', 
            ['nome'=>'Karine',
             'sobrenome'=>'Cardozo']
);
Route::get('/hellonome/{nome}/{sobrenome}', function($nome,$sn){
    return view('hellonome', ['nome'=>$nome,'sobrenome'=>$sn]);
});