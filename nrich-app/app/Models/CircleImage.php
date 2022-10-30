<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircleImage extends Model
{
    protected $table = 'circle_images';

    protected $fillable =
    [
        'circle_id',
        'hero_img',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
    ];

    public function circles() {
        return $this->belongsTo('App\Models\Circle');
    }

    use HasFactory;
}