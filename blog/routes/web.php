<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//====================================================================
Route::get('/demo01/add',  function (){
            echo 'Demo 01 -- add ';
} );

Route::get('/demo01/add', 'Demo01Controller@add')->name('Demo01.add');
// /demo01/edit
Route::get('/demo01/edit/{iduser}', 'Demo01Controller@edit')
            ->where(['iduser'=>'[0-9]+'])
            ->name('Demo01.edit');

Route::get('/demo01/bang-demo', 'Demo01Controller@BangDemo');

Route::get('/user','UserController@index')
                ->name('User.index');
Route::get('/user/add','UserController@add')
                ->name('User.add');











