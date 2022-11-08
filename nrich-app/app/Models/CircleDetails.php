<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircleDetails extends Model
{
    protected $table = 'circle_details';

    protected $fillable =
    [
        'catch_copy',
        'summary',
        'number_of_men',
        'number_of_women',
        'location',
        'activity_frequency',
        'number_of_camps',
    ];

    public function circles() {
        return $this->belongsTo('App\Models\Circle');
    }



    use HasFactory;
}