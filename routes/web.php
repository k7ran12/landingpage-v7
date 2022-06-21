<?php

use Illuminate\Support\Facades\Route;
use App\Models\Pagina;

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
    $pagina = Pagina::find(1);
    return view('welcome', compact('pagina'));
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('paginas', App\Http\Controllers\PaginaController::class);


