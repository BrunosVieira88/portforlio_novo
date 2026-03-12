<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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

Route::get('/lang/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'pt'], true)) {
        abort(404);
    }

    session(['locale' => $locale]);

    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('welcome');
});

Route::get('leste', [BookController::class, 'leste']);
Route::resource('oeste', BookController::class);
