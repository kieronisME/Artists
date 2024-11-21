<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'rating',
        'releaseYear',
        'embedLink',
        'image',
    ];

    //this makes it a one to many relationship
    public function Review()
    {
        return $this->hasMany(Review::class);

    }

}


