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


//リレーション名
    public function CircleImages() {
        return $this->hasMany('App\Models\CircleImage');
    }

    public function CircleDetails() {
        return $this->hasMany('App\Models\CircleDetails');
    }

    public function CircleAtmospheres() {
        return $this->hasMany('App\Models\CircleAtmosphere');
    }

    use HasFactory;
}
