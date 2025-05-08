<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/', function () {
    return view('welcome');
});





Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



require __DIR__.'/auth.php';
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::delete('/admin/inquiries/{id}', [AdminController::class, 'destroy'])->name('inquiries.destroy');
// Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
// Route::get('/admin/register', [AdminController::class, 'showRegisterForm'])->name('admin.register'); // optional



// Route::middleware(['', 'admin'])->group(function () {
// Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard'); 
// });