<?php
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\AgendaController;

Route::get('/', [Maincontroller::class, 'index'])->name('index');
Route::post('emergency', [MainController::class, 'emergency'])->name('emergency');
Route::get('/berita/{post:slug}', [Maincontroller::class, 'show'])->name('artikel');
Route::get('about', [MainController::class, 'vAbout'])->name('about');
Route::get('visimisi', [MainController::class, 'vVisiMisi'])->name('visimisi');
Route::get('sejarah', [MainController::class, 'vSejarah'])->name('sejarah');
Route::get('wilayah', [MainController::class, 'vWilayah'])->name('wilayah');
Route::get('strukturkelurahan', [MainController::class, 'vStruktur'])->name('struktur');
Route::get('perangkatkelurahan', [MainController::class, 'vPerangkat'])->name('perangkat');
Route::get('lembagakelurahan', [MainController::class, 'vLembaga'])->name('lembaga');
Route::get('wisata', [MainController::class, 'vWisata'])->name('wisata');
Route::get('umkm', [MainController::class, 'vUmkm'])->name('umkm');
Route::get('umkm/{umkm}', [MainController::class, 'vDetailUmkm'])->name('detailumkm');
Route::get('berita', [MainController::class, 'vBerita'])->name('berita');
Route::get('agenda', [MainController::class, 'vAgenda'])->name('agenda');
Route::get('galeri', [MainController::class, 'vGaleri'])->name('galeri');
Route::get('potensi', [MainController::class, 'vPotensi'])->name('potensi');

Auth::routes();
Route::delete('postHapusEmergency/{emergency}', [HomeController::class, 'destroyEmergency'])->name('hapusEmergency');
Route::middleware(['auth', 'user-access:superadmin'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/pemadamkebakaran', [HomeController::class, 'vDamkar'])->name('vDamkar');
    Route::get('/rumahsakit', [HomeController::class, 'vRsud'])->name('vRsud');
    Route::get('/bpbd', [HomeController::class, 'vBpbd'])->name('vBpbd');
    Route::get('post/create', [HomeController::class, 'create'])->name('create');
    Route::post('upload_image',[HomeController::class, 'uploadImage'])->name('uploadImage');
    Route::post('post/artikel', [HomeController::class, 'store'])->name('postArtikel');
    Route::get('post/edit/{post}', [HomeController::class, 'edit'])->name('edit');
    Route::get('post/{post}', [HomeController::class, 'show'])->name('show');
    Route::put('post/postUpdate/{post}', [HomeController::class, 'update'])->name('postUpdate');
    Route::delete('post/hapus/{post}', [HomeController::class, 'destroy'])->name('hapus');
    Route::get('umkmdashboard', [UmkmController::class, 'index'])->name('dashboardumkm');
    Route::get('umkmdashboard/create', [UmkmController::class, 'create'])->name('createUmkm');
    Route::post('umkmdashboard/post', [UmkmController::class, 'store'])->name('postUmkm');
    Route::get('umkmdashboard/edit/{umkm}', [UmkmController::class, 'edit'])->name('updateUmkm');
    Route::put('umkmdashboard/postUpdate/{umkm}', [UmkmController::class, 'update'])->name('postUpdateUmkm');
    Route::delete('umkmdashboard/delete/{umkm}', [UmkmController::class, 'destroy'])->name('deleteUmkm');
    Route::get('wisatadashboard', [WisataController::class, 'index'])->name('dashboardwisata');
    Route::get('wisatadashboard/create', [WisataController::class, 'create'])->name('createWisata');
    Route::post('wisatadashboard/post', [WisataController::class, 'store'])->name('postWisata');
    Route::get('wisatadashboard/edit/{wisata}', [WisataController::class, 'edit'])->name('updateWisata');
    Route::put('wisatadashboard/postUpdate/{wisata}', [WisataController::class, 'update'])->name('postUpdateWisata');
    Route::delete('wisatadashboard/delete/{wisata}', [WisataController::class, 'destroy'])->name('deleteWisata');
    Route::get('agendadashboard', [AgendaController::class, 'index'])->name('dashboardagenda');
    Route::get('agendadashboard/create', [AgendaController::class, 'create'])->name('createAgenda');
    Route::post('agendadashboard/post', [AgendaController::class, 'store'])->name('postAgenda');
    Route::get('agendadashboard/edit/{agenda}', [AgendaController::class, 'edit'])->name('updateAgenda');
    Route::put('agendadashboard/postUpdate/{agenda}', [AgendaController::class, 'update'])->name('postUpdateAgenda');
    Route::delete('agendadashboard/delete/{agenda}', [AgendaController::class, 'destroy'])->name('deleteAgenda');
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