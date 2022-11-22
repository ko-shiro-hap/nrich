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
    // カテゴリー
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    //キャンパス
    public function campuses(){
        return $this->belongsToMany(Campus::class);
    }
    //特徴
    public function characteristics(){
        return $this->belongsToMany(Characteristic::class);
    }


    use HasFactory;
}
