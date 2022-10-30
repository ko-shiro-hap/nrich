<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircleImage extends Model
{
    protected $table = 'circle_images';

    protected $fillable =
    [
        'hero_img',
        'img1',
        'img2',
        'img3',
        'img4',
        'img5',
    ]


    use HasFactory;
}