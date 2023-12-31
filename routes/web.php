<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardSupelController;
use App\Http\Controllers\DashboardLemburController;
use App\Http\Controllers\PdfController;

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

Route::view('/', 'welcome');
Route::view('/home', 'home')->name('home');
// Route::view('/about', 'about')->name('about');
// Route::resource('/about', DashboardSupelController::class)->middleware('auth');
// Route::resource([
//     'about' => DashboardSupelController::class,
// ]);

Route::resource('/about', DashboardSupelController::class)->names([
    'index' => 'about',
    'show' => 'about.lihat'
]);

Route::resource('/lembur', DashboardLemburController::class)->names([
    'index' => 'lembur',
    'show' => 'lembur.lihat',
    'create' => 'lembur.tambah'
]);


// Route::resource('/about', DashboardSupelController::class)->middleware('auth');
// Route::get('/about/checkSlug', [DashboardSupelController::class, 'show'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('pdf', [PdfController::class, 'index']);
require __DIR__ . '/auth.php';
