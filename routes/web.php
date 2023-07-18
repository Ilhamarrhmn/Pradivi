<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UmkmController;


Route::get('/', [Maincontroller::class, 'index'])->name('index');
Route::post('emergency', [MainController::class, 'emergency'])->name('emergency');
Route::get('/berita/{post:slug}', [Maincontroller::class, 'show'])->name('artikel');
Route::get('about', [MainController::class, 'vAbout'])->name('about');
Route::get('visimisi', [MainController::class, 'vVisiMisi'])->name('visimisi');
Route::get('umkm', [MainController::class, 'vUmkm'])->name('umkm');
Route::get('umkm/{umkm}', [MainController::class, 'vDetailUmkm'])->name('detailumkm');
Route::get('berita', [MainController::class, 'vBerita'])->name('berita');
Route::get('galeri', [MainController::class, 'vGaleri'])->name('galeri');

Auth::routes();
Route::delete('postHapusEmergency{emergency}', [HomeController::class, 'destroyEmergency'])->name('hapusEmergency');
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/pemadamkebakaran', [HomeController::class, 'vDamkar'])->name('vDamkar');
    Route::get('/rumahsakit', [HomeController::class, 'vRsud'])->name('vRsud');
    Route::get('/bpbd', [HomeController::class, 'vBpbd'])->name('vBpbd');
    Route::get('post/create', [HomeController::class, 'create'])->name('create');
    Route::post('upload_image',[HomeController::class, 'uploadImage'])->name('upload');
    Route::post('post/artikel', [HomeController::class, 'store'])->name('postArtikel');
    Route::get('post/edit/{post}', [HomeController::class, 'edit'])->name('edit');
    Route::get('post/{post}', [HomeController::class, 'show'])->name('show');
    Route::put('postEdit/{post}', [HomeController::class, 'update'])->name('postUpdate');
    Route::delete('postHapus/{post}', [HomeController::class, 'destroy'])->name('hapus');
    Route::get('/dashboardumkm', [UmkmController::class, 'index'])->name('dashboardumkm');
    Route::get('umkm/create', [UmkmController::class, 'create'])->name('createumkm');
    Route::post('umkm/post', [UmkmController::class, 'store'])->name('postUmkm');
});

Route::middleware(['auth', 'user-access:damkar'])->group(function () {
    Route::get('/admin/pemadamkebakaran', [HomeController::class, 'vDamkar'])->name('vadminDamkar');
});

Route::middleware(['auth', 'user-access:rsud'])->group(function () {
    Route::get('/admin/rumahsakit', [HomeController::class, 'vRsud'])->name('vadminRsud');
});

Route::middleware(['auth', 'user-access:bpbd'])->group(function () {
    Route::get('/admin/bpbd', [HomeController::class, 'vBpbd'])->name('vadminBpbd');
});