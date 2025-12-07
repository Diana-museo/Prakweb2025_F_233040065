<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardPostController;
use Illuminate\Support\Facades\Route;

// // Contoh Route untuk menampilkan view
// Route::get('/', function () {
//     return view('welcome');
// });

// Route untuk memanggil method di PostController
Route::resource('posts', PostController::class)->only(['index']);
Route::resource('categories', CategoryController::class)->only(['index']);
Route::resource('users', UserController::class)->only(['index']);

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');

// Protect posts dan categories dengan auth middleware
// Route dari laraveltest-main
Route::get('/posts', [PostController::class, 'index'])->middleware('auth')->name('posts.index');

// Route Model Binding dengan Slug
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');

// Route untuk register - middleware guest (hanya untuk yang belum login)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

// Route untuk login - middleware guest (hanya untuk yang belum login)
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');

// Route untuk logout - middleware auth (hanya untuk yang sudah login)
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Route untuk dashboard posts - hanya untuk yang sudah login
// Index - Menampilkan semua posts milik user
Route::get('/dashboard', [DashboardPostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard.index');
// Create - Form unruk membuat post baru
Route::get('/dashboard/create', [DashboardPostController::class, 'create'])->middleware(['auth', 'verified'])->name('dashboard.create');
// Store - Menyimpan post baru
Route::post('/dashboard', [DashboardPostController::class, 'store'])->middleware(['auth', 'verified'])->name('dashboard.store');
// Show - Menampilkan detail post berdasarkan slug
Route::get('/dashboard/{post:slug}', [DashboardPostController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard.show');