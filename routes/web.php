<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ACController;

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

Route::get('/animalcrossing', [ACController::class, 'randomCritter']);

Route::get('/animalcrossing/fish', [ACController::class, 'fish']);
Route::get('/animalcrossing/fish/{name}', [ACController::class, 'fishUnit']);

Route::get('/animalcrossing/sea', [ACController::class, 'sea']);
Route::get('/animalcrossing/sea/{name}', [ACController::class, 'seaUnit']);

Route::get('/animalcrossing/bugs', [ACController::class, 'bugs']);
Route::get('/animalcrossing/bugs/{name}', [ACController::class, 'bugsUnit']);

