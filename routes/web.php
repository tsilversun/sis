<?php

use App\Http\Controllers\StudentController;
use app\Models\student;
use App\Models\course;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [StudentController::class, 'student']);

Route::get('/', function () {
    return view('welcome');
});
