<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('/notes', );         // to list all the notes of the users
// Route::get('/notes/{note}', );  // to view the single users note and {note} will be the unique id
// Route::get('/notes/create', );   // to create a note
// Route::post('/notes',);         //to save a notes
 
Route::resource('/notes',NoteController::class)->middleware(['auth']);  // this 4 work can be done in signle line with the help of controller
                                                                        //->middleware(['auth']) is used to make sure none of the user cant login without authentication 


require __DIR__.'/auth.php';
