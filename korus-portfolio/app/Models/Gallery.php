<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function pictures()
    {
        return $this->hasMany('Picture');
    }

    public function videos()
    {
        return $this->hasMany('Video');
    }
}