<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircleAtmosphere extends Model
{
    protected $table = 'circle_atmospheres';

    protected $fillable =
    [
        'seriousness',
        'hyponymy',
        'more_position',
        'intimacy',
        'dinner_meeting',
    ];

    public function circles() {
        return $this->belongsTo('App\Models\Circle');
    }

    use HasFactory;
}
