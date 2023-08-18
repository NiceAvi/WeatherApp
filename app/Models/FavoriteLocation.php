<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteLocation extends Model
{
    use HasFactory;
    protected $fillable = [
        'city',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
