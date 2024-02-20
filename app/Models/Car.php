<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Car extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'id';
    protected $fillable = [
        'brand',
        'model',
        'year',
        'price',
        'description',
        'photo',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
