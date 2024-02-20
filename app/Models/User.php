<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Car;


class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function car()
    {
        return $this->hasMany(Car::class)->latest();
    }
}
