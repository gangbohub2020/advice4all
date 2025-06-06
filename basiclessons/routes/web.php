<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home/{id}/{nom}', function($id, $nom){
//     //return view('welcome');
//     return "Mon ID est ".$id." et mon nom est ".$nom." ";
// });

Route::get('/',[PagesController::class,'home']);

Route::get('/services',[PagesController::class,'services']);

Route::get('/apropos',[PagesController::class,'apropos']);