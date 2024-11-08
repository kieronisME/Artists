<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class fav extends Model
{
    use HasFactory;
    protected $table = 'fav';
    protected $fillable = [
    'title',
    'rating',
    'releaseYear',
    'Song',
    'image',
    ];
}


