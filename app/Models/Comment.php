<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class Comment extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'name',
        'genre',
        'studio',
        'label',
        'album_id',
    ];
   
    public function Albums()
    {
        return $this->belongsTo(Album::class);

    }

    public function User()
    {
        return $this->belongsTo(User::class);

    }

}


