<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLandingController;
use App\Http\Controllers\TimTeknisiController;

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

// Untuk admin sementara
Route::get('/', function () {
    return view('admin.home');
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





// Route::get('/project_manajer/home', [ManagementProjectController::class, 'home'])->name('manajer.home');
// // Route::get('/project_manajer/master_pricelist', [ManagementProjectController::class, 'master_pricelist'])->name('manajer.master_pricelist');
// // Route::get('/project_manajer/master_user', [ManagementProjectController::class, 'master_user'])->name('manajer.master_user');
// // Route::get('/project_manajer/master_rekanan', [ManagementProjectController::class, 'master_rekanan'])->name('manajer.master_rekanan');
// // Route::get('/project_manajer/master_marketing', [AdminLandingController::class, 'master_marketing'])->name('manajer.master_marketing');
// // Route::get('/project_manajer/master_tim_teknis', [AdminLandingController::class, 'master_tim_teknis'])->name('manajer.master_tim_teknis');
// Route::get('/project_manajer/master_project', [ManagementProjectController::class, 'master_project'])->name('manajer.master_project');
// // Route::get('/project_manajer/tabel_piutang_project', [AdminLandingController::class, 'tabel_piutang_project'])->name('manajer.tabel_piutang_project');
// // Route::get('/project_manajer/tabel_hutang_komisi', [AdminLandingController::class, 'tabel_hutang_komisi'])->name('manajer.tabel_hutang_komisi');
// // Route::get('/project_manajer/tabel_hutang_gaji_tim_teknis', [AdminLandingController::class, 'tabel_hutang_gaji_tim_teknis'])->name('manajer.tabel_hutang_gaji_tim_teknis');
// // Route::get('/project_manajer/tabel_hutang_rekanan_pekerjaan', [AdminLandingController::class, 'tabel_hutang_rekanan_pekerjaan'])->name('manajer.tabel_hutang_rekanan_pekerjaan');
// // Route::get('/project_manajer/tabel_pembukuan_keuangan', [AdminLandingController::class, 'tabel_pembukuan_keuangan'])->name('manajer.tabel_pembukuan_keuangan');



Route::get('/manajer/home', function () {
    return view('project_manager.home');
});


Route::get('/manajer/master_project', function () {
    return view('project_manager.master_project');
});






Route::get('/tim_teknisi/home', [TimTeknisiController::class, 'home'])->name('teknisi.home');
Route::get('/tim_teknisi/master_project', [TimTeknisiController::class, 'master_project'])->name('teknisi.master_project');
Route::get('/tim_teknisi/profile_user', [TimTeknisiController::class, 'profile_user'])->name('teknisi.profile_user');









require __DIR__.'/auth.php';
