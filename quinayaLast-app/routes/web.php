<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\quoteController;
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
    $data = quoteController::getQuote();
    $newData = quoteController::getQuote();
    return view('dashboard', ['quote' => $data['quote'], 'newdata'=>$newData['quote'], 'counter'=>$data['counter'], 'newCounter' => $newData['counter']]);

})->name('dashboard');




require __DIR__.'/auth.php';
