<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $table = 'characteristics';

    protected $fillable =
    [
        'characteristic',
    ];

    use HasFactory;



    public function circles(){
    return $this->belongsToMany(Circle::class);
    }
}
