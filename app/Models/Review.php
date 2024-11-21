<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Notifications\Notifiable;

class Review extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'review',
        'rating' ,
      
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

