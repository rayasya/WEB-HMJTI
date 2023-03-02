<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiroController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\AngkatanController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KritikSaranController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\InfoController;
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


// Auth::routes();
// Replace Default Login Route
Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('admin/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('admin/login',  [LoginController::class, 'login'])->name('admin.login');

Route::get('autocomplete', [DashboardController::class, 'autocomplete'])->name('autocomplete');

// ROUTES ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    //Dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // Auth Admin
    Route::middleware(['admin'])->group(function () {

        //Departemen
        Route::get('departemen', [DepartemenController::class, 'index'])->name('list.departemen');
        Route::post('departemen/store', [DepartemenController::class, 'store'])->name('add.departemen');
        Route::post('departemen/update/{id}', [DepartemenController::class, 'update'])->name('update.departemen');
        Route::get('/departemen/delete/{id}', [DepartemenController::class, 'delete'])->name('delete.departemen');


        //Biro
        Route::get('biro', [BiroController::class, 'index'])->name('list.biro');
        Route::post('biro/store', [BiroController::class, 'store'])->name('add.biro');
        Route::post('biro/update/{id}', [BiroController::class, 'update'])->name('update.biro');
        Route::get('/biro/delete/{id}', [BiroController::class, 'delete'])->name('delete.biro');

        //Jabatan
        Route::get('jabatan', [JabatanController::class, 'index'])->name('list.jabatan');
        Route::post('jabatan/store', [JabatanController::class, 'store'])->name('add.jabatan');
        Route::post('jabatan/update/{id}', [JabatanController::class, 'update'])->name('update.jabatan');
        Route::get('/jabatan/delete/{id}', [JabatanController::class, 'delete'])->name('delete.jabatan');

        //Prodi
        Route::get('prodi', [ProdiController::class, 'index'])->name('list.prodi');
        Route::post('prodi/store', [ProdiController::class, 'store'])->name('add.prodi');
        Route::post('prodi/update/{id}', [ProdiController::class, 'update'])->name('update.prodi');
        Route::get('/prodi/delete/{id}', [ProdiController::class, 'delete'])->name('delete.prodi');


        //Periode
        Route::get('periode', [PeriodeController::class, 'index'])->name('list.periode');
        Route::post('periode/store', [PeriodeController::class, 'store'])->name('add.periode');
        Route::post('periode/update/{id}', [PeriodeController::class, 'update'])->name('update.periode');
        Route::get('/periode/delete/{id}', [PeriodeController::class, 'delete'])->name('delete.periode');

        //Golongan
        Route::get('golongan', [GolonganController::class, 'index'])->name('list.golongan');
        Route::post('golongan/store', [GolonganController::class, 'store'])->name('add.golongan');
        Route::post('golongan/update/{id}', [GolonganController::class, 'update'])->name('update.golongan');
        Route::get('/golongan/delete/{id}', [GolonganController::class, 'delete'])->name('delete.golongan');


        //Angkatan
        Route::get('angkatan', [AngkatanController::class, 'index'])->name('list.angkatan');
        Route::post('angkatan/store', [AngkatanController::class, 'store'])->name('add.angkatan');
        Route::post('angkatan/update/{id}', [AngkatanController::class, 'update'])->name('update.angkatan');
        Route::get('/angkatan/delete/{id}', [AngkatanController::class, 'delete'])->name('delete.angkatan');

        //Info
        Route::get('info', [InfoController::class, 'index'])->name('list.info');
        Route::post('info/store', [InfoController::class, 'store'])->name('add.info');
        Route::get('info/edit/{id}', [InfoController::class, 'edit'])->name('edit.info');
        Route::post('info/update/{id}', [InfoController::class, 'update'])->name('update.info');
        Route::get('info/delete/{id}', [InfoController::class, 'delete'])->name('delete.info');
        Route::view('info/create', 'admin.pages.info.create')->name('create.info');
    });


    //Artikels
    Route::get('artikel', [ArtikelController::class, 'index'])->name('list.artikel');
    Route::get('artikel/tambah', [ArtikelController::class, 'create'])->name('tambah.artikel');
    Route::get('artikel/edit/{id}', [ArtikelController::class, 'edit'])->name('edit.artikel');
    Route::post('artikel/store', [ArtikelController::class, 'store'])->name('add.artikel');
    Route::post('artikel/update/{id}', [ArtikelController::class, 'update'])->name('update.artikel');
    Route::get('artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('delete.artikel');

    //Form
    Route::get('google-form', [FormController::class, 'index'])->name('list.form');
    Route::post('google-form/store', [FormController::class, 'store'])->name('add.form');
    Route::post('google-form/update/{id}', [FormController::class, 'update'])->name('update.form');
    Route::get('/google-form/delete/{id}', [FormController::class, 'delete'])->name('delete.form');


    //Kategori
    Route::get('kategori', [KategoriController::class, 'index'])->name('list.kategori');
    Route::post('kategori/store', [KategoriController::class, 'store'])->name('add.kategori');
    Route::post('kategori/update/{id}', [KategoriController::class, 'update'])->name('update.kategori');
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('delete.kategori');

    //Komentar
    Route::get('komentar', [KomentarController::class, 'index'])->name('list.komentar');
    Route::post('komentar/store', [KomentarController::class, 'store'])->name('add.komentar');
    Route::post('komentar/update/{id}', [KomentarController::class, 'update'])->name('update.komentar');
    Route::get('/komentar/delete/{id}', [KomentarController::class, 'delete'])->name('delete.komentar');



    //KritikSaran
    Route::get('kritik-saran', [KritikSaranController::class, 'index'])->name('list.kritikSaran');
    // Route::post('kritik-saran/update/{id}', [KategoriController::class, 'update'])->name('update.kritikSaran');
    Route::get('/kritik-saran/delete/{id}', [KritikSaranController::class, 'delete'])->name('delete.kritikSaran');

    //Pengurus
    Route::get('pengurus', [PengurusController::class, 'index'])->name('list.pengurus');
    Route::get('pengurus/tambah', [PengurusController::class, 'create'])->name('tambah.pengurus');
    Route::get('pengurus/edit/{id}', [PengurusController::class, 'edit'])->name('edit.pengurus');
    Route::post('pengurus/store', [PengurusController::class, 'store'])->name('add.pengurus');
    Route::post('pengurus/update/{id}', [PengurusController::class, 'update'])->name('update.pengurus');
    Route::get('/pengurus/delete/{id}', [PengurusController::class, 'delete'])->name('delete.pengurus');

    Route::get('user', [AdminController::class, 'index'])->name('list.user');
    Route::get('user/tambah', [AdminController::class, 'create'])->name('tambah.user');
    Route::get('user/edit/{id}', [AdminController::class, 'edit'])->name('edit.user');
    Route::post('user/store', [AdminController::class, 'store'])->name('add.user');
    Route::post('user/update/{id}', [AdminController::class, 'update'])->name('update.user');
    Route::get('/user/delete/{id}', [AdminController::class, 'delete'])->name('delete.user');

    Route::get('user/edit-profile/{id}', [AdminController::class, 'editProfile'])->name('editProfile.user');
    Route::post('user/update-profile/{id}', [AdminController::class, 'updateProfile'])->name('updateProfile.user');
    Route::get('user/reset-pass/{id}', [AdminController::class, 'resetPassword'])->name('password.reset');
});




//ROUTE USER
Route::get('/', [UserController::class, 'index']);
Route::get('/beranda', [UserController::class, 'index'])->name('beranda');

// ROUTE TENTANG KAMI
// Route::get('/form/{slug}', [UserController::class, 'form'])->name('google.form');
Route::domain('form.hmjti-polije.com')->group(
    function () {
        //mobile routes
        Route::get('/', [UserController::class, 'forbiden'])->name('notfound');
        Route::get('/{slug}', [UserController::class, 'form'])->name('google.form');
    }
);

Route::get('/kritik-saran', [UserController::class, 'kritiksaran'])->name('kritiksaran');
Route::post('kritik-saran/store', [KritikSaranController::class, 'store'])->name('add.kritikSaran');

// Route::get('blog/{cari}', [UserController::class, 'getBlog'])->name('blog.detail');

Route::name('blog.')->prefix('blog')->group(function () {
    Route::get('/cari', [UserController::class, 'cariBlog'])->name('cari');
    Route::get('/{artikel}', [UserController::class, 'getBlog'])->name('detail');
    Route::get('/', [UserController::class, 'blog'])->name('blogs');
    Route::get('/tags/{kategori}', [UserController::class, 'getBlogWithCategory'])->name('kategori');
});

Route::get('/profile', [UserController::class, 'profile'])->name('profile');




//404
Route::fallback(function () {
    return view('error-404');
});
