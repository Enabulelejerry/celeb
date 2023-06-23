<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CelebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
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
Route::post('/admin/login',[AuthController::class,'Login']);
 Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard',[DashboardController::class,'DashboardPage'])->name('dashboard');
    Route::get('/add/celeb',[CelebController::class,'AddCeleb'])->name('celeb.add');
    Route::post('/store/celeb',[CelebController::class,'StoreCeleb'])->name('store.celeb');
    Route::get('/view/celeb',[CelebController::class,'ViewCeleb'])->name('celeb.view');
    Route::get('/edit/celeb/{id}',[CelebController::class,'EditCeleb'])->name('edit.celeb');
    Route::post('/update/celeb/{id}',[CelebController::class,'UpdateCeleb'])->name('update.celeb');
    Route::get('/delete/celeb/{id}',[CelebController::class,'DeleteCeleb'])->name('delete.celeb');
    Route::get('/get/booking',[CelebController::class,'GetBooking'])->name('celeb.booking');
    Route::get('/logout',[AuthController::class,'Logout'])->name('logout');
 });

Route::get('/',[PageController::class,'index'])->name('home');
Route::get('/book',[PageController::class,'BookPage'])->name('book_celeb');
Route::get('/celebs',[PageController::class,'CelebPage'])->name('celeb');
Route::post('/book/celeb',[PageController::class,'BookCeleb'])->name('book.celeb');

Route::get('/login',[AuthController::class,'LoginForm'])->name('login');


