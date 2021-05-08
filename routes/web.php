<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaterialesController;
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

Route::get('/', function () {
    return view('material.index');
});
/*
Route::get('/material', function () {
    return view('material.create');
});

Route::get ('/material/create',[MaterialesController::class,'create']);
*/
Route::resource('material',MaterialesController::class);