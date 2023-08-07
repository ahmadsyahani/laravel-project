<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/project', [ProjectController::class, 'index'])->name('project');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/dashboard', [AdminCotroller::class, 'index'])->name('dashboard');
Route::get('/mastersiswa', [SiswaController::class, 'index'])->name('mastersiswa');
Route::get('/masterproject', [ProjectController::class, 'index'])->name('masterproject');
Route::get('/mastercontact', [ContactController::class, 'index'])->name('mastercontact');