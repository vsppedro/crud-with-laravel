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
//Home
Route::get('/',['as'=>'site.home', 'uses'=> 'Site\HomeController@index']);

//Login
Route::get('/login',['as'=>'login', 'uses'=> 'Site\LoginController@index']);
Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=> 'Site\LoginController@sair']);
Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=> 'Site\LoginController@entrar']);

//Cadastro
Route::get('/cadastrar',['as'=>'site.cadastrar', 'uses'=> 'Site\CadastroController@index']);

//Contato
Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);
Route::post('/contato',['uses'=>'ContatoController@criar']);
Route::put('/contato',['uses'=>'ContatoController@editar']);

//Admin
Route::group(['middleware'=>'auth'], function () {
    
    Route::get('/admin/eventos',['as'=>'admin.cursos', 'uses'=> 'Admin\CursoController@index']);
    Route::get('/admin/eventos/adicionar',['as'=>'admin.cursos.adicionar', 'uses'=> 'Admin\CursoController@adicionar']);
    Route::post('/admin/eventos/salvar',['as'=>'admin.cursos.salvar', 'uses'=> 'Admin\CursoController@salvar']);
    Route::get('/admin/eventos/editar/{id}',['as'=>'admin.cursos.editar', 'uses'=> 'Admin\CursoController@editar']);
    Route::put('/admin/eventos/atualizar/{id}',['as'=>'admin.cursos.atualizar', 'uses'=> 'Admin\CursoController@atualizar']);
    Route::get('/admin/eventos/deletar/{id}',['as'=>'admin.cursos.deletar', 'uses'=> 'Admin\CursoController@deletar']); 
    
});


