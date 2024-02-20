<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'user_id', 'brand', 'model', 'year', 'price', 'description', 'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
