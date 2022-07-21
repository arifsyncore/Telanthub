<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecordDataController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\DB;
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

Route::get('/email', function () {
    return view('mail.mail');
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{slug}', [BlogController::class, 'single']);
Route::get('/blog/kategori/{slug}', [BlogController::class, 'category']);
Route::get('/blog/tag/{slug}', [BlogController::class, 'tag']);
Route::post('/blog/comment/{id}', [BlogController::class, 'comment']);

Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/', [HomeController::class, 'index']);

Route::get('/daftar-mahasiswa', [HomeController::class, 'daftar_mahasiswa']);
Route::post('/proses-daftarmhs', [HomeController::class, 'proses_daftar_mahasiswa']);
Route::get('/daftar-dosen', [HomeController::class, 'daftar_dosen']);
Route::post('/proses-daftardosen', [HomeController::class, 'proses_daftar_dosen']);
Route::get('/daftar-mitra', [HomeController::class, 'daftar_mitra']);
Route::post('/proses-daftarmitra', [HomeController::class, 'proses_daftar_mitra']);
Route::get('/landing', [HomeController::class, 'landing'])->name('landing');
Route::post('/proses_langganan', [HomeController::class, 'proses_langganan']);
Route::get('/talenta-academy', [HomeController::class, 'talenta_academy']);
Route::get('/magang-bersertifikat', [HomeController::class, 'magang_bersertifikat']);
Route::get('/tentang-kami', [HomeController::class, 'tentang_kami']);

Route::get('/getCourse/{id}', [HomeController::class, 'get_layanan']);
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
        Route::resource('post', PostController::class);
        Route::get('/comment/hapus/{id}', [PostController::class, 'hapus_komen']);
        Route::resource('category', CategoryController::class);
        Route::resource('tag', TagsController::class);
        //record data pendaftar
        Route::get('/data-mahasiswa',[RecordDataController::class, 'data_mahasiswa']);
        Route::get('/data-mahasiswa/export', [RecordDataController::class, 'export_data_mahasiswa']);
        Route::get('/data-dosen',[RecordDataController::class, 'data_dosen']);
        Route::get('/data-dosen/export', [RecordDataController::class, 'export_data_dosen']);
        Route::get('/data-mitra',[RecordDataController::class, 'data_mitra']);
        Route::get('/data-mitra/export', [RecordDataController::class, 'export_data_mitra']);
        Route::get('/data-pelanggan',[RecordDataController::class, 'data_pelanggan']);
        Route::get('/data-pelanggan/export', [RecordDataController::class, 'export_data_pelanggan']);
    });
});
