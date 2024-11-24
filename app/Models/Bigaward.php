<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bigaward extends Model
{
    use HasFactory;
    protected $fillable = ['album','name','year','image'];

    public function albums()
    {
        return $this->belongsToMany(Album::class);

    }
}
