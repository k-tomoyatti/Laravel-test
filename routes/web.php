<?php

use Illuminate\Support\Facades\Route;

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

// URLが「/」でアクセスされたとき、TasksControllerのindex()にルーティング (処理を流す)
Route::get('/', 'App\Http\Controllers\TasksController@index');

// URLが「/task」でアクセスされたとき、viewファイルのtask.blade.phpを画面に表示する。
Route::view('/task', 'task');

// URLが「/task」でPOST(タスク追加ボタンを押下)されたとき、TasksControllerのadd()にルーティング
Route::post('/task', 'App\Http\Controllers\TasksController@add');

// URLが「/task/{削除するタスクのid}」でDELETE(タスク削除ボタンを押下)されたとき、TasksControllerのdelete()にルーティング
Route::delete('/task/{id}', 'App\Http\Controllers\TasksController@deleteTask');
