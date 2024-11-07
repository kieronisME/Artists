<?php
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //extra
    Route::get('/artists/{artist}/fav', [ArtistController::class, 'favorite'])->name('Artists.fav');
    Route::get('/artists/favorites', [ArtistController::class, 'favorites'])->name('Artists.favorites');


    //crud
    Route::put('/artists/{artist}', [ArtistController::class, 'update'])->name('Artists.update');
    Route::get('/artists/{artist}/edit', [ArtistController::class, 'edit'])->name('Artists.edit');
    Route::delete('/artists/{artist}', [ArtistController::class, 'destroy'])->name('Artists.destroy');
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('Artists.create');

    //others 
    Route::post('/artists', [ArtistController::class, 'store'])->name('Artists.store');
    Route::get('/artists', [ArtistController::class, 'index'])->name('Artists.index');
    Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('Artists.show');

    //dont touch this
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
   