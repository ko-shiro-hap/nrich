<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circle extends Model
{
    protected $table = 'circles';

    protected $fillable =
    [
        'name',
    ];


    //多対多のリレーション
    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function campuses(){
        return $this->belongsToMany(Campus::class);
    }


    use HasFactory;
}