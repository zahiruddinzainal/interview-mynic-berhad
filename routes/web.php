<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

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

Route::get('/add', function () {
    return view('add');
});


Route::get('/', [ NoteController::class, "displaylist" ]);
Route::post('/addnote', [ NoteController::class, "addnote" ]);
Route::get('/update/{number}', [ NoteController::class, "update" ]);
Route::post('/updatenote', [ NoteController::class, "updatenote" ]);
Route::get('/deletenote/{number}', [ NoteController::class, "deletenote" ]);

