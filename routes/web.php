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

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home'); // This will render the home.blade.php view
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('dashboard');
});

use App\Http\Controllers\RolePermissionController;

Route::get('/roles', [RolePermissionController::class, 'index'])->name('roles.index');
Route::post('/roles/{roleId}/assign', [RolePermissionController::class, 'assignPermission']);

use App\Http\Controllers\AdminAuthController;

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login']);
    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    });
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('getcomments', [PostController::class, 'getcomment'])->name('posts.comments');
