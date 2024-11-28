<?php
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\BigawardController;
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
//                                               Many to Many                                         //
//####################################################################################################//
Route::resource('Bigawards', BigawardController::class,)->middleware('auth');
Route::get('/bigawards', [BigawardController::class, 'index'])->name('Bigawards.index');
Route::put('/bigawards/{bigaward}', [BigawardController::class, 'update'])->name('Bigawards.update');
Route::get('/bigawards/{bigaward}/edit', [BigawardController::class, 'edit'])->name('Bigawards.edit');

Route::get('/bigawards/{bigaward}', [BigawardController::class, 'show'])->name('Bigawards.show');
Route::delete('/bigawards/{bigaward}', [BigawardController::class, 'destroy'])->name('Bigawards.destroy');
Route::get('/bigawards/create', [BigawardController::class, 'create'])->name('bigawards.create');
Route::post('/bigawards', [BigawardController::class, 'store'])->name('Bigawards.store');
//####################################################################################################//
//                                               One to Many                                          //
//####################################################################################################//
Route::resource('reviews',ReviewController::class);
Route::post('albums/{album}/reviews',[ReviewController::class,'store'])->name('reviews.store');


//####################################################################################################//
//                                                 Extra                                             //
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



//add insert route fail route 


require __DIR__.'/auth.php';
   