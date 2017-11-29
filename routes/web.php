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

//Usuario
Route::get('/usuario/adicionar',['as'=>'site.usuario.adicionar', 'uses'=> 'Site\UsuarioController@adicionar']);
Route::post('/usuario/salvar',['as'=>'site.usuario.salvar', 'uses'=> 'Site\UsuarioController@salvar']);

//Contato
Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);
Route::post('/contato',['uses'=>'ContatoController@criar']);
Route::put('/contato',['uses'=>'ContatoController@editar']);

//Interesses
Route::get('/interesse/{id}',['as'=>'site.interesse.interessados', 'uses'=> 'Admin\InteresseController@interessados']);

//Admin
Route::group(['middleware'=>'auth'], function () {
    
    //Eventos
    Route::get('/admin/eventos',['as'=>'admin.eventos', 'uses'=> 'Admin\EventoController@index']);
    Route::get('/admin/eventos/adicionar',['as'=>'admin.eventos.adicionar', 'uses'=> 'Admin\EventoController@adicionar']);
    Route::post('/admin/eventos/salvar',['as'=>'admin.eventos.salvar', 'uses'=> 'Admin\EventoController@salvar']);
    Route::get('/admin/eventos/editar/{id}',['as'=>'admin.eventos.editar', 'uses'=> 'Admin\EventoController@editar']);
    Route::put('/admin/eventos/atualizar/{id}',['as'=>'admin.eventos.atualizar', 'uses'=> 'Admin\EventoController@atualizar']);
    Route::get('/admin/eventos/deletar/{id}',['as'=>'admin.eventos.deletar', 'uses'=> 'Admin\EventoController@deletar']);
    
    //Eventos Interesse
    Route::get('/admin/interesse',['as'=>'admin.interesse', 'uses'=> 'Admin\InteresseController@index']);
    Route::get('/admin/interesse/salvar/{id}',['as'=>'admin.interesse.salvar', 'uses'=> 'Admin\InteresseController@salvar']);
    Route::get('/admin/interesse/deletar/{id}',['as'=>'admin.interesse.deletar', 'uses'=> 'Admin\InteresseController@deletar']);
    
    //Usuario
    Route::get('/usuario',['as'=>'site.usuario', 'uses'=> 'Site\UsuarioController@index']);
    Route::get('/admin/usuario/editar/{id}',['as'=>'admin.usuario.editar', 'uses'=> 'Site\UsuarioController@editar']);
    Route::put('/admin/usuario/atualizar/{id}',['as'=>'admin.usuario.atualizar', 'uses'=> 'Site\UsuarioController@atualizar']);
    Route::get('/admin/usuario/deletar/{id}',['as'=>'admin.usuario.deletar', 'uses'=> 'Site\UsuarioController@deletar']);
});


