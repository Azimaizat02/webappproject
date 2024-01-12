<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [HomeController::class,'homepage']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::get('post',[HomeController::class, 'post'])->middleware(['auth','admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// PLAYER

Route::get('/player_page', [AdminController::class,'player_page']);

Route::post('/add_player', [AdminController::class,'add_player']);

Route::get('/show_player', [AdminController::class,'show_player']);

Route::get('/delete_player/{id}', [AdminController::class,'delete_player']);

Route::get('/edit_player/{id}', [AdminController::class,'edit_player']);

Route::post('/update_player/{id}', [AdminController::class,'update_player']);

// DONATION

Route::get('/add_donation_page', [AdminController::class,'add_donation_page']);

Route::post('/add_donation', [AdminController::class,'add_donation']);

Route::get('/show_donation', [AdminController::class,'show_donation']);

Route::get('/delete_donation/{id}', [AdminController::class,'delete_donation']);

Route::get('/edit_donation/{id}', [AdminController::class,'edit_donation']);

Route::post('/update_donation/{id}', [AdminController::class,'update_donation']);


// NEWS

Route::get('/add_news_page', [AdminController::class,'add_news_page']);

Route::post('/add_news', [AdminController::class,'add_news']);

Route::get('/show_news', [AdminController::class,'show_news']);

Route::get('/delete_news/{id}', [AdminController::class,'delete_news']);

Route::get('/edit_news/{id}', [AdminController::class,'edit_news']);

Route::post('/update_news/{id}', [AdminController::class,'update_news']);

// Merchandise

Route::get('/merchandise_page', [AdminController::class,'merchandise_page']);

Route::post('/add_merchandise', [AdminController::class,'add_merchandise']);

Route::get('/show_merchandise', [AdminController::class,'show_merchandise']);

Route::get('/delete_merchandise/{id}', [AdminController::class,'delete_merchandise']);

Route::get('/edit_merchandise/{id}', [AdminController::class,'edit_merchandise']);

Route::post('/update_merchandise/{id}', [AdminController::class,'update_merchandise']);

// Match/Game

Route::get('/game_page', [AdminController::class,'game_page']);

Route::post('/add_game', [AdminController::class,'add_game']);

Route::get('/show_game', [AdminController::class,'show_game']);

Route::get('/delete_game/{id}', [AdminController::class,'delete_game']);

Route::get('/edit_game/{id}', [AdminController::class,'edit_game']);

Route::post('/update_game/{id}', [AdminController::class,'update_game']);




//Home

Route::get('/player_details/{id}', [HomeController::class,'player_details']);

Route::get('/my_player',[HomeController::class,'my_player']);

Route::get('/donation',[HomeController::class,'donation']);

Route::get('/about_us',[HomeController::class,'about_us']);

Route::get('/create_donation',[HomeController::class,'create_donation'])->middleware('auth');

Route::post('/user_donation',[HomeController::class,'user_donation'])->middleware('auth');

Route::get('/news',[HomeController::class,'news']);

Route::get('/merchandise',[HomeController::class,'merchandise']);

Route::get('/cartmerchandise',[HomeController::class,'cartmerchandise']);

Route::get('/cartmerchandise/{id}', [HomeController::class, 'cartmerchandise'])->name('cartmerchandise');

Route::get('/game',[HomeController::class,'game']);

Route::get('/cartgame',[HomeController::class,'cartgame']);

Route::get('/cartgame/{id}', [HomeController::class, 'cartgame'])->name('cartgame');

