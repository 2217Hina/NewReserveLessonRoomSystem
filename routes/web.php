<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\RLRController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//各Top画面へ
 Route::get('/mypage', [RLRController::class, 'mypage']);

//Top画面（ユーザー登録画面への遷移）
Route::get('/', [RLRController::class, 'TOP']);
Route::get('/register', [RLRController::class, 'register']);
Route::get('/register/confirm/{user}',[RLRController::class, 'return_register_comfirm']);
Route::POST('/register/confirm', [RLRController::class, 'register_confirm']);
Route::get('/register/complete/{user}',[RLRController::class, 'return_register_complete']);
Route::POST('/register/complete', [RLRController::class, 'register_complete']);






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//管理者①
Route::group(['middleware' => ['auth', 'can:manage1']], function () {
 Route::get('/1_top', [RLRController::class, 'manage1_top']);
 Route::get('/1_add', [RLRController::class, 'manage1_add']);
 Route::get('/1_add/confirm/{user}',[RLRController::class, 'return_1_add_confirm']);
 Route::POST('/1_add/confirm', [RLRController::class, 'manage1_add_confirm']);
 Route::get('/1_add/complete/{user}',[RLRController::class, 'return_1_add_complete']);
 Route::POST('/1_add/complete', [RLRController::class, 'manage1_add_complete']);

});

//管理者②
Route::group(['middleware' => ['auth', 'can:manage2']], function () {
 Route::get('/3_top', [RLRController::class, 'manage2_top']);
 Route::get('/3_reserve',[RLRController::class,'manage2_reserve']);
 Route::get('/3_history',[RLRController::class,'manage2_history']);
 Route::get('/3_manage_rooms',[RLRController::class,'manage2_manage_rooms']);
});

//一般ユーザー
Route::group(['middleware' => ['auth', 'can:general']], function () {
 Route::get('/4_top', [RLRController::class, 'g_top']);
 Route::get('/g_reserve_conditions', [RLRController::class, 'return_g_reserve_conditions']);
 Route::POST('/g_reserve_conditions', [RLRController::class, 'g_reserve_conditions']);
 Route::get('/g_reserve_rooms/{user}', [RLRController::class, 'return_g_reserve_rooms']);
 Route::POST('/g_reserve_rooms', [RLRController::class, 'g_reserve_rooms']);
 Route::get('/g_reserve_comfirm/{user}', [RLRController::class, 'return_g_reserve_comfirm']);
 Route::POST('/g_reserve_comfirm', [RLRController::class, 'g_reserve_comfirm']);
 Route::get('/g_reserve_complete/{user}', [RLRController::class, 'return_g_reserve_complete']);
 Route::POST('/g_reserve_complete', [RLRController::class, 'g_reserve_complete']);
 Route::get('/g_history', [RLRController::class, 'g_history']);
 Route::delete('/4_cancel/{reserve}', [RLRController::class, 'g_cancel']);
});






Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



