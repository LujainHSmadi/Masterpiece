<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function kitchens()
    {
        return $this->belongsToMany(Kitchen::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    

    use HasFactory;
}
