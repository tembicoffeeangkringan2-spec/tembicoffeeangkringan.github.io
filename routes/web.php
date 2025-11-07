<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\AdminAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🏠 Halaman Utama
Route::get('/', fn() => view('home'))->name('home');

// ☕ Daftar Produk
Route::get('/products', function () {
    $products = [
        (object)[
            'name' => 'Kopi susu',
            'price' => 6000,
            'image_url' => asset('images/kopi.jpeg'),
            'description' => 'Minuman tradisional yang menghangatkan tubuh, terbuat dari susu dan jahe segar.',
        ],
        (object)[
            'name' => 'V60',
            'price' => 12000,
            'image_url' => asset('images/v60.jpg'),
            'description' => 'Kopi hasil seduhan manual menggunakan alat V60, memiliki rasa yang kaya dan aromatik.',
        ],
        (object)[
            'name' => 'Americano',
            'price' => 10000,
            'image_url' => asset('images/amer.jpeg'),
            'description' => 'Kopi hitam dengan rasa kuat namun lembut, cocok untuk penikmat kopi sejati.',
        ],
        (object)[
            'name' => 'Japanese Coffee',
            'price' => 13000,
            'image_url' => asset('images/japa.jpeg'),
            'description' => 'Kopi Jepang dengan cita rasa unik dan keseimbangan rasa pahit serta manis.',
        ],
        (object)[
            'name' => 'Kopi Tubruk',
            'price' => 5000,
            'image_url' => asset('images/tub.jpeg'),
            'description' => 'Kopi khas Indonesia dengan seduhan langsung tanpa disaring.',
        ],
        (object)[
            'name' => 'Latte',
            'price' => 15000,
            'image_url' => asset('images/late.jpeg'),
            'description' => 'Kopi lembut dengan susu steamed yang creamy dan rasa manis seimbang.',
        ],
    ];

    return view('products', compact('products'));
})->name('products');

// 📖 Halaman Informasi
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

// 📩 Kirim Pesan
Route::post('/send-message', function () {
    return back()->with('success', 'Pesan berhasil dikirim!');
})->name('send.message');

// ================================
// 🔹 Halaman & Proses Reservasi 🔹
// ================================
Route::get('/reservasi', [ReservationController::class, 'index'])->name('reservasi.index');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

// ================================
// 🔹 Halaman Admin 🔹
// ================================

// 🔐 Login dan logout admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// 🔐 Grup route dengan proteksi auth:admin
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/reservasi', [AdminReservationController::class, 'index'])->name('reservasi.index');
    Route::post('/reservasi/{id}/status', [AdminReservationController::class, 'updateStatus'])->name('reservasi.status');
    Route::delete('/reservasi/{id}', [AdminReservationController::class, 'destroy'])->name('reservasi.destroy');
});

