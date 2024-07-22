<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('home.index');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => 'auth'], function () {
        //dashboard
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::resource('/permission', App\Http\Controllers\Admin\PermissionController::class, ['except' => ['show', 'create', 'edit', 'update', 'delete'], 'as' => 'admin']);
        Route::resource('/role', App\Http\Controllers\Admin\RoleController::class, ['except' => ['show'], 'as' => 'admin']);
        Route::resource('/user', App\Http\Controllers\Admin\UserController::class, ['except' => ['show'], 'as' => 'admin']);
        Route::resource('/tag', App\Http\Controllers\Admin\TagController::class, ['except' => 'show', 'as' => 'admin']);
        Route::resource('/category', App\Http\Controllers\Admin\CategoryController::class, ['except' => 'show', 'as' => 'admin']);
        Route::resource('/post', App\Http\Controllers\Admin\PostController::class, ['except' => 'show', 'as' => 'admin']);
        Route::resource('/event', App\Http\Controllers\Admin\EventController::class, ['except' => 'show', 'as' => 'admin']);
        Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show', 'create', 'edit', 'update'], 'as' => 'admin']);
        Route::resource('/video', App\Http\Controllers\Admin\VideoController::class, ['except' => 'show', 'as' => 'admin']);
    });
});

Route::get('/tefa', [App\Http\Controllers\TefaController::class, 'index'])->name('tefa.index');
Route::get('/galeri', [App\Http\Controllers\GaleriController::class, 'index'])->name('galeri.index');
Route::get('/prestasi', [App\Http\Controllers\PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/profil', [App\Http\Controllers\ProfilController::class, 'index'])->name('profil.index');
Route::get('/berita/{slug}', [App\Http\Controllers\LandingController::class, 'show'])->name('berita.index');
Route::get('/berita/{slug}', [App\Http\Controllers\PrestasiController::class, 'show'])->name('berita.index');
Route::get('/tag/{name}', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
Route::get('/category/{name}', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');


Route::prefix('jurusan')->group(function () {
    //dashboard
    Route::get('/pplg', [App\Http\Controllers\JurusanController::class, 'pplg'])->name('jurusan.pplg.index');
    Route::get('/tjkt', [App\Http\Controllers\JurusanController::class, 'tjkt'])->name('jurusan.tjkt.index');
    Route::get('/busana', [App\Http\Controllers\JurusanController::class, 'busana'])->name('jurusan.busana.index');
});
