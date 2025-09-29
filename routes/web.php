<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Página de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Autenticación
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Tienda y productos
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/detail', function () {
    return view('detail');
})->name('detail');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Contacto
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Dashboard (para usuarios autenticados)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Admin dashboard
Route::get('/admin-dashboard', function () {
    return view('admin_dashboard');
})->name('admin.dashboard');

// 404
Route::get('/404', function () {
    return view('404');
})->name('404');

// Navbar y footer (si usas componentes)
Route::get('/navbar', function () {
    return view('navbar');
})->name('navbar');

Route::get('/footer', function () {
    return view('footer');
})->name('footer');

// Perfil (si lo tienes)
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// routes/web.php

use App\Http\Controllers\ProductController; // Asegúrate de importar el controlador


// Ruta para mostrar un producto específico
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.detail');

require __DIR__.'/auth.php';