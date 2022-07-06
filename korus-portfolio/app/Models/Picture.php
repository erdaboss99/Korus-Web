<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;

    protected $fillable = [
        'gallery_id',
        'name',
        'thumbnail'
    ];

    public function gallery()
    {
        return $this->belongsTo('Gallery');
    }
}
