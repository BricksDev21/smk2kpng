<?php

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
    return redirect(route('dashboard'));
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\Umum\DashboardController::class, 'index'])->name('dashboard');
Route::get('/galeri', [App\Http\Controllers\Umum\GaleriController::class, 'index'])->name('galeri');

Route::group(['as'=>'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
    
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('AdminGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'index'])->name('galeri');
    Route::get('InputGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'create'])->name('inputGaleri');
    Route::post('InsertGaleri', [App\Http\Controllers\Admin\GaleriController::class, 'store'])->name('insertGaleri');
    Route::delete('DeleteGaleri/{galeri}', [App\Http\Controllers\Admin\GaleriController::class, 'destroy'])->name('deleteGaleri');
    Route::get('EditGaleri/{galeri}', [App\Http\Controllers\Admin\GaleriController::class, 'edit'])->name('editGaleri');
    Route::put('UpdateGaleri/{galeri}/edit', [App\Http\Controllers\Admin\GaleriController::class, 'update'])->name('updateGaleri');

    Route::get('AdminGuru', [App\Http\Controllers\Admin\GuruController::class, 'index'])->name('guru');
    Route::get('InputGuru', [App\Http\Controllers\Admin\GuruController::class, 'create'])->name('inputGuru');
    Route::post('InsertGuru', [App\Http\Controllers\Admin\GuruController::class, 'store'])->name('insertGuru');
    Route::delete('DeleteGuru/{guru}', [App\Http\Controllers\Admin\GuruController::class, 'destroy'])->name('deleteGuru');
    Route::get('EditGuru/{guru}', [App\Http\Controllers\Admin\GuruController::class, 'edit'])->name('editGuru');
    Route::put('UpdateGuru/{guru}/edit', [App\Http\Controllers\Admin\GuruController::class, 'update'])->name('updateGuru');

    Route::get('StatusGuru', [App\Http\Controllers\Admin\StatusController::class, 'index'])->name('status');
    Route::get('InputStatus', [App\Http\Controllers\Admin\StatusController::class, 'create'])->name('inputStatus');
    Route::post('InsertStatus', [App\Http\Controllers\Admin\StatusController::class, 'store'])->name('insertStatus');
    Route::delete('DeleteStatus/{status}', [App\Http\Controllers\Admin\StatusController::class, 'destroy'])->name('deleteStatus');
    Route::get('EditStatus/{status}', [App\Http\Controllers\Admin\StatusController::class, 'edit'])->name('editStatus');
    Route::put('UpdateStatus/{status}/edit', [App\Http\Controllers\Admin\StatusController::class, 'update'])->name('updateStatus');

    Route::get('KategoriBerita', [App\Http\Controllers\Admin\KategoriController::class, 'index'])->name('kategori');
    Route::get('InputKategori', [App\Http\Controllers\Admin\KategoriController::class, 'create'])->name('inputKategori');
    Route::post('InsertKategori', [App\Http\Controllers\Admin\KategoriController::class, 'store'])->name('insertKategori');
    Route::delete('DeleteKategori/{kategori}', [App\Http\Controllers\Admin\KategoriController::class, 'destroy'])->name('deleteKategori');
    Route::get('EditKategori/{kategori}', [App\Http\Controllers\Admin\KategoriController::class, 'edit'])->name('editKategori');
    Route::put('UpdateKategori/{kategori}/edit', [App\Http\Controllers\Admin\KategoriController::class, 'update'])->name('updateKategori');

    Route::get('Tag', [App\Http\Controllers\Admin\TagController::class, 'index'])->name('tag');
    Route::get('InputTag', [App\Http\Controllers\Admin\TagController::class, 'create'])->name('inputTag');
    Route::post('InsertTag', [App\Http\Controllers\Admin\TagController::class, 'store'])->name('insertTag');
    Route::delete('DeleteTag/{tag}', [App\Http\Controllers\Admin\TagController::class, 'destroy'])->name('deleteTag');
    Route::get('EditTag/{tag}', [App\Http\Controllers\Admin\TagController::class, 'edit'])->name('editTag');
    Route::put('UpdateTag/{tag}/edit', [App\Http\Controllers\Admin\TagController::class, 'update'])->name('updateTag');

    Route::get('Berita', [App\Http\Controllers\Admin\BeritaController::class, 'index'])->name('berita');
    Route::get('InputBerita', [App\Http\Controllers\Admin\BeritaController::class, 'create'])->name('inputBerita');
    Route::post('InsertBerita', [App\Http\Controllers\Admin\BeritaController::class, 'store'])->name('insertBerita');
    Route::delete('DeleteBerita/{berita}', [App\Http\Controllers\Admin\BeritaController::class, 'destroy'])->name('deleteBerita');
    Route::get('EditBerita/{berita}', [App\Http\Controllers\Admin\BeritaController::class, 'edit'])->name('editBerita');
    Route::put('UpdateBerita/{berita}/edit', [App\Http\Controllers\Admin\BeritaController::class, 'update'])->name('updateBerita');

    Route::get('Pengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'index'])->name('pengumuman');
    Route::get('InputPengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'create'])->name('inputPengumuman');
    Route::post('InsertPengumuman', [App\Http\Controllers\Admin\PengumumanController::class, 'store'])->name('insertPengumuman');
    Route::delete('DeletePengumuman/{pengumuman}', [App\Http\Controllers\Admin\PengumumanController::class, 'destroy'])->name('deletePengumuman');
    Route::get('EditPengumuman/{pengumuman}', [App\Http\Controllers\Admin\PengumumanController::class, 'edit'])->name('editPengumuman');
    Route::put('UpdatePengumuman/{pengumuman}/edit', [App\Http\Controllers\Admin\PengumumanController::class, 'update'])->name('updatePengumuman');

    Route::get('Modul', [App\Http\Controllers\Admin\ModulController::class, 'index'])->name('modul');
    Route::get('InputModul', [App\Http\Controllers\Admin\ModulController::class, 'create'])->name('inputModul');
    Route::post('InsertModul', [App\Http\Controllers\Admin\ModulController::class, 'store'])->name('insertModul');
    Route::delete('DeleteModul/{modul}', [App\Http\Controllers\Admin\ModulController::class, 'destroy'])->name('deleteModul');
    Route::get('EditModul/{modul}', [App\Http\Controllers\Admin\ModulController::class, 'edit'])->name('editModul');
    Route::put('UpdateModul/{modul}/edit', [App\Http\Controllers\Admin\ModulController::class, 'update'])->name('updateModul');
});

Route::group(['as'=>'siswa.','prefix' => 'siswa','namespace'=>'siswa','middleware'=>['auth','siswa']], function () {
    Route::get('dashboard', [App\Http\Controllers\Siswa\DashboardController::class, 'index'])->name('dashboard');
});
