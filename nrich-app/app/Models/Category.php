<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable =
    [
        'category',
    ];

    use HasFactory;



    public function circles(){
    return $this->belongsToMany(Circle::class);
    }
}
