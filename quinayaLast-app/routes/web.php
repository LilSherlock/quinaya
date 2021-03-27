<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\quoteController;
use App\Http\Controllers\userController;
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
    $AllQuotes = quoteController::getAllQuotes();
    //dd($AllQuotes);
    return view('dashboard', ['quote' => $data['quote'], 'newdata'=>$newData['quote'], 'counter'=>$data['counter'], 'newCounter' => $newData['counter'], 'allQuotes' => $AllQuotes]);

})->name('dashboard');

Route::get('/user/{id}', function ($id) {
    $data = userController::getUser($id);
    return $data;
});

require __DIR__.'/auth.php';
