<?php

use App\Http\Controllers\HelloController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnCallback;

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




// Route::get('hello/{id?}/{pass?}', [HelloController::class, 'index']);
// Route::get('hello/other', [HelloController::class, 'other']);
Route::get('hello',[ HelloController::class, 'index']);

