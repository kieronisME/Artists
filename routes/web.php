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
    Route::get('/artists/create', [ArtistController::class, 'create'])->name('Artists.create');
    Route::post('/artists', [ArtistController::class, 'store'])->name('Artists.store');
    
    
    Route::get('/artists', [ArtistController::class, 'index'])->name('Artists.index');
    Route::get('/artists/{artist}', [ArtistController::class, 'show'])->name('artists.show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
