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
Auth::routes();
Route::group(['middleware' => 'isAuth'], function() {
    Route::get('/', 'IndexController@index');
    Route::get('/Index', 'IndexController@index');

    Route::get('/Employee', ['uses' => 'UserController@index']);
    Route::get('/EmployeeAdd', ['uses' => 'UserController@addShow']);
    Route::post('/EmployeeInsert', ['uses' => 'UserController@insert']);
    Route::get('/EmployeeView/{id?}', ['uses' => 'UserController@userViewShow']);
    Route::post('/EmployeeDescrInsert', ['uses' => 'UserController@actionInsert']);
//    Route::get('/Employee?search={$search}', 'UserController@userSearch');

    Route::get('/Classes', ['uses' => 'ClassController@index']);
    Route::get('/ClassAdd', ['uses' => 'ClassController@addShow']);
    Route::post('/ClassInsert', ['uses' => 'ClassController@insert']);
    Route::get('/ClassView/{id?}', ['uses' => 'ClassController@classViewShow']);

    Route::get('/Disciplines', ['uses' => 'PredmetController@index']);
    Route::get('/DisciplineAdd', ['uses' => 'PredmetController@addShow']);
    Route::post('/DisciplineInsert', ['uses' => 'PredmetController@insert']);

    Route::get('/Disciplines', ['uses' => 'PredmetController@index']);
    Route::get('/DisciplineAdd', ['uses' => 'PredmetController@addShow']);
    Route::post('/DisciplineInsert', ['uses' => 'PredmetController@insert']);

    Route::get('/Students', ['uses' => 'StudentController@index']);
    Route::get('/StudentAdd', ['uses' => 'StudentController@addShow']);
    Route::post('/StudentInsert', ['uses' => 'StudentController@insert']);

    Route::get('/UchProg', ['uses' => 'UchPlanController@index']);
    Route::get('/UchProgAdd', ['uses' => 'UchPlanController@addShow']);
    Route::post('/UchProgInsert', ['uses' => 'UchPlanController@insert']);

    Route::get('/User', 'UserController@editUser');
    Route::get('/Exit', 'Auth\LoginController@logout');
});



//Route::get('/home', 'HomeController@index')->name('home');
