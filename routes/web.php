<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\EntranceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MonitorController;
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

Route::get('/', BerandaController::class)->name('beranda');

Route::get('/pendaftaran', [PesertaController::class, 'pendaftaran'])->name('peserta.pendaftaran');
Route::post('/simpanpendaftaran', [PesertaController::class, 'simpanpendaftaran'])->name('simpan.pendaftaran');

Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('monitor',MonitorController::class);

    Route::prefix('admin')->group(function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');

        //ACL -- Access Control List
        Route::resource('user', UserController::class);
        Route::resource('role', RoleController::class);
        Route::resource('task', TaskController::class);


        // Lokasi
        Route::resource('provinsi', ProvinsiController::class);
        Route::resource('kota', KotaController::class);

        // Event
        Route::resource('event', EventController::class);
        Route::resource('entrance', EntranceController::class);

        // Peserta
        Route::resource('peserta', PesertaController::class);
        Route::resource('bidang', BidangController::class);
        Route::resource('jabatan', JabatanController::class);

        Route::get('/kirimemail/{peserta}', [PesertaController::class, 'kirimemail'])->name('peserta.kirimemail');

        Route::get('/excelpeserta', [PesertaController::class, 'excelpeserta'])->name('peserta.excelpeserta');
        // pendaftaran


        // monitor


        // ubah profile
        Route::get('/ubahuser', [UserController::class, 'ubah'])->name('user.ubah');
        Route::put('/simpanuser', [UserController::class, 'simpan'])->name('user.simpan');
        Route::put('/save-token', [UserController::class, 'token'])->name('user.token');
        Route::get('/user-notification', [UserController::class, 'notification'])->name('user.notification');
    });
});
