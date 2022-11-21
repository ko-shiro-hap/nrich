<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    protected $table = 'campuses';

    protected $fillable =
    [
        'campus',
        'university_id',
    ];


    // サークルとの多対多のリレーション
    public function circles(){
    return $this->belongsToMany(Circle::class);
    }

    use HasFactory;
}