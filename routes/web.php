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
    return view('home');
});

//rotas para as aplicaçoes

Route::get('/listprototypes', 'prototypesViewController@list_Prototypes')->name('prototype.list_Prototypes');
Route::get('/email_Contato' , 'prototypesViewController@email_Contato')->name('prototype.email_Contato');
Route::get('/jokenpo_game'  , 'prototypesViewController@jokenpo_game')->name('prototype.jokenpo');
Route::get('/job_view'      , 'prototypesViewController@job_view')->name('prototype.job_view');
Route::get('/home',function(){
	return view('/views_Login_CRUD/home_Login');
});

//rotas do jokenpo
Route::get('/choose/{playerpoints?}/{cpupoints?}/{id?}', 'Jokenpocontroller@Jokenpo_IA')->name('prototype.jokenpo_ia');

//rota dos Jobs
Route::get('/job_Processor', 'JobController@job_Service')->name('prototype.job_Service');


//rotas da autenticaçao
Auth::routes();


