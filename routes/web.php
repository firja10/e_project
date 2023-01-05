<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLandingController;

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
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::middleware('is_admin')->group(function () {


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



});






// Mentahan UI Admin 

Route::get('/admin/home', [AdminLandingController::class, 'home'])->name('admin.home');
Route::get('/admin/master_pricelist', [AdminLandingController::class, 'master_pricelist'])->name('admin.master_pricelist');
Route::get('/admin/master_user', [AdminLandingController::class, 'master_user'])->name('admin.master_user');
Route::get('/admin/master_rekanan', [AdminLandingController::class, 'master_rekanan'])->name('admin.master_rekanan');
Route::get('/admin/master_marketing', [AdminLandingController::class, 'master_marketing'])->name('admin.master_marketing');

Route::get('/admin/master_tim_teknis', [AdminLandingController::class, 'master_tim_teknis'])->name('admin.master_tim_teknis');

Route::get('/admin/master_project', [AdminLandingController::class, 'master_project'])->name('admin.master_project');

Route::get('/admin/tabel_piutang_project', [AdminLandingController::class, 'tabel_piutang_project'])->name('admin.tabel_piutang_project');

Route::get('/admin/tabel_hutang_komisi', [AdminLandingController::class, 'tabel_hutang_komisi'])->name('admin.tabel_hutang_komisi');

Route::get('/admin/tabel_hutang_gaji_tim_teknis', [AdminLandingController::class, 'tabel_hutang_gaji_tim_teknis'])->name('admin.tabel_hutang_gaji_tim_teknis');

Route::get('/admin/tabel_hutang_rekanan_pekerjaan', [AdminLandingController::class, 'tabel_hutang_rekanan_pekerjaan'])->name('admin.tabel_hutang_rekanan_pekerjaan');

Route::get('/admin/tabel_pembukuan_keuangan', [AdminLandingController::class, 'tabel_pembukuan_keuangan'])->name('admin.tabel_pembukuan_keuangan');













require __DIR__.'/auth.php';
