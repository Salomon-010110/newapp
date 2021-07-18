<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::resource('estudiante','EstudianteController@index');
#get -post - put - delete -show

Route::get('dashboard','DashboardController@index') -> name('dashboard.index');

Route::get('/tarea/buscar','TareaController@buscar');

Route::get('saludo', function(){
    return "bienvenidos: hello world ";
});
Route::get('/post/{numero?}', function($numero=1){
    return "el numero: ".$numero;
})->where('numero','[0-9]+');

Route::get('/obra/{genero}',function($genero){
    switch ($genero) {
        case 'amor':
            return "la obra es de amor";
            break;
        case 'accion':
            return "esta obra es de accion";
            break;
        default:
            return "esta obra no esta en la colección";
            break;
    }
});
