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
//
//Route::get('/', function () {
//    return view('hhh');
//});
//Route::get('/hhh', function () {
//    return view('hhh');
//});

Route::redirect('/','/home');

Route::get('/home',[App\Http\Controllers\HomeController::class ,'index'])->name('home');


Route::get('/suppliers',[App\Http\Controllers\SupplierController::class ,'index'])->name('supplier.index');
route::get('/suppliers/create', [App\Http\Controllers\SupplierController::class ,'create'])->name('suppliers.create');
route::post('/suppliers', [App\Http\Controllers\SupplierController::class ,'store'])->name('suppliers');
route::get('/suppliers/{supplier}/edit',  [App\Http\Controllers\SupplierController::class ,'edit'])->name('suppliers.edit');
route::patch('/suppliers/{supplier}',  [App\Http\Controllers\SupplierController::class ,'update'])->name('suppliers.update');
route::delete('/suppliers/{supplier}', [App\Http\Controllers\SupplierController::class ,'destroy'])->name('suppliers.destroy');

//route::get('/suppliers/search', [App\Http\Controllers\SupplierController::class ,'search'])->name('suppliers.search');



Route::get('/tasks',[App\Http\Controllers\TaskController::class ,'index'])->name('tasks.index');
route::get('/tasks/create', [App\Http\Controllers\TaskController::class ,'create'])->name('tasks.create');
route::post('/tasks', [App\Http\Controllers\TaskController::class ,'store'])->name('tasks');
route::get('/tasks/{task}/edit',  [App\Http\Controllers\TaskController::class ,'edit'])->name('tasks.edit');
route::patch('/tasks/{task}',  [App\Http\Controllers\TaskController::class ,'update'])->name('tasks.update');



Route::group(['prefix' => 'projects'], function() {

    Route::get('/', [
        'uses' => 'App\Http\Controllers\ProjectController@index',
        'as' => 'projects.index',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);

    Route::get('/check_slug', [
        'uses' => 'App\Http\Controllers\ProjectController@checkSlug',
        'as' => 'projects.checkSlug',
    ]);

    Route::get('/create', [
        'uses' => 'App\Http\Controllers\ProjectController@create',
        'as' => 'projects.create',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);

    Route::get('/{project}', [
        'uses' => 'App\Http\Controllers\ProjectController@fillByProject',
        'as' => 'project.fillByProject',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);


    Route::post('/', [
        'uses' => 'App\Http\Controllers\ProjectController@store',
        'as' => 'projects',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);
    Route::get('/{project}/edit', [
        'uses' => 'App\Http\Controllers\ProjectController@edit',
        'as' => 'projects.edit',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);
    Route::patch('/{project}', [
        'uses' => 'App\Http\Controllers\ProjectController@update',
        'as' => 'projects.update',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);
    Route::delete('/{project}', [
        'uses' => 'App\Http\Controllers\ProjectController@destroy',
        'as' => 'projects.destroy',
        'middleware' => 'roles',
        'roles' => ['admin']
    ]);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
