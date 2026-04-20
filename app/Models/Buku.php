<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
    'title',
    'author',
    'year',
    'publisher',
    'city',
    'cover',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_npm', 'npm');
    }
}
