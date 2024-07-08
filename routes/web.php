<?php

use App\Http\Controllers\ArsipLaporanController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\KlasifikasilaporanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelaporController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatusPelaporController;
use App\Http\Controllers\SubjeklaporanController;
use App\Http\Controllers\TentangLaporinController;
use App\Http\Controllers\UserController;
use App\Models\SubjekLaporan;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [PelaporController::class, 'index'])->name('home')->middleware('guest');
Route::get('/', [PelaporController::class, 'index'])->name('home')->middleware('guest');
Route::get('/profil', [PelaporController::class, 'profil'])->name('pages.profil');
Route::get('/arsiplaporan', [ArsipLaporanController::class, 'arsiplaporan'])->name('pages.arsiplaporan')->middleware('auth');

//login
Route::get('/login', [LoginController::class, 'login'])->name('auth.login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth'])->name('auth.login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout.post');


Route::get('/register', [RegisterController::class, 'register'])->name('auth.register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->name('auth.register.post');

Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->middleware('aksesuser:1');

Route::get('/admin/laporan', [HomeController::class, 'pengaduan'])->middleware('aksesuser:1');

Route::get('/admin/subjeklaporan', [SubjeklaporanController::class, 'index'])->name('admin.subjeklaporan')->middleware('aksesuser:1');
Route::post('/admin/subjeklaporan', [SubjeklaporanController::class, 'store'])->name('pages.add.subjeklaporan')->middleware('aksesuser:1');
Route::delete('/admin/subjeklaporan/{id}', [SubjeklaporanController::class, 'destroy'])->name('pages.delete.subjeklaporan')->middleware('aksesuser:1');
Route::put('/admin/subjeklaporan/{id}', [SubjeklaporanController::class, 'update'])->name('pages.update.subjeklaporan')->middleware('aksesuser:1');
// Route::get('/admin/subjeklaporan/add', [SubjeklaporanController::class, 'create'])->middleware('auth');

Route::get('/admin/statuspelapor', [StatusPelaporController::class, 'index'])->name('admin.statuspelapor')->middleware('aksesuser:1');
Route::post('/admin/statuspelapor', [StatusPelaporController::class, 'store'])->name('pages.add.statuspelapor')->middleware('aksesuser:1');
Route::delete('/admin/statuspelapor/{id}', [StatusPelaporController::class, 'destroy'])->name('pages.delete.statuspelapor')->middleware('aksesuser:1');
Route::put('/admin/statuspelapor/{id}', [StatusPelaporController::class, 'update'])->name('pages.update.statuspelapor')->middleware('aksesuser:1');

Route::get('/admin/klasifikasilaporan', [KlasifikasilaporanController::class, 'index'])->name('admin.klasifikasilaporan')->middleware('aksesuser:1');
Route::post('/admin/klasifikasilaporan', [KlasifikasilaporanController::class, 'store'])->name('pages.add.klasifikasilaporan')->middleware('aksesuser:1');
Route::delete('/admin/klasifikasilaporan/{id}', [KlasifikasilaporanController::class, 'destroy'])->name('pages.delete.klasifikasilaporan')->middleware('aksesuser:1');
Route::put('/admin/klasifikasilaporan/{id}', [KlasifikasilaporanController::class, 'update'])->name('pages.update.klasifikasilaporan')->middleware('aksesuser:1');

Route::get('/admin/tentanglaporin', [TentangLaporinController::class, 'index'])->name('admin.tentanglaporin')->middleware('aksesuser:1');
Route::post('/admin/tentanglaporin', [TentangLaporinController::class, 'store'])->name('pages.add.tentanglaporin')->middleware('aksesuser:1');
Route::delete('/admin/tentanglaporin/{id}', [TentangLaporinController::class, 'destroy'])->name('pages.delete.tentanglaporin')->middleware('aksesuser:1');
Route::put('/admin/tentanglaporin/{id}', [TentangLaporinController::class, 'update'])->name('pages.update.tentanglaporin')->middleware('aksesuser:1');

Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user')->middleware('aksesuser:1');
Route::post('/admin/user', [UserController::class, 'store'])->name('pages.add.user')->middleware('aksesuser:1');

Route::get('laporanmasuk/informatika', [LaporanController::class, 'informatika'])->name('informatika.page');

Route::get('/index', [IndexController::class, 'index'])->name('index')->middleware('aksesuser:0');
Route::post('/index', [IndexController::class, 'store'])->name('create.laporan')->middleware('aksesuser:0');

Route::get('/tentanglaporin', [PelaporController::class, 'tentanglaporin'])->name('tentanglaporin');





// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
