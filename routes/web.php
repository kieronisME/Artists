<?php
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


//####################################################################################################//
//                                               One to Many                                          //
//####################################################################################################//
Route::resource('rating', AlbumController::class);
Route::get('/albums/{album}/rating', [AlbumController::class, 'store'])->name('Albums.store');

Route::resource('reviews', ReviewController::class);
Route::post('/albums/{album}/reviews', [ReviewController::class, 'store'])->name('reviews.store');


//####################################################################################################//
//                                                  Extra                                             //
//####################################################################################################//
    Route::get('/albums/fiveStar', [AlbumController::class, 'fiveStaralbum'])->name('Albums.fiveStar');
    Route::get('/albums/year', [AlbumController::class, 'year'])->name('Albums.year');
   
    

//####################################################################################################//
//                                                  Crud                                              //
//####################################################################################################//
    Route::put('/albums/{album}', [AlbumController::class, 'update'])->name('Albums.update');
    Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])->name('Albums.edit');
    Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])->name('Albums.destroy');
    Route::get('/albums/create', [AlbumController::class, 'create'])->name('Albums.create');


//####################################################################################################//
//                                           Normal functionality                                     //
//####################################################################################################//
    Route::post('/albums', [AlbumController::class, 'store'])->name('Albums.store');
    Route::get('/albums', [AlbumController::class, 'index'])->name('Albums.index');
    Route::get('/albums/{album}', [AlbumController::class, 'show'])->name('Albums.show');



//####################################################################################################//
//                                                  Profile                                           //
//####################################################################################################//
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
   