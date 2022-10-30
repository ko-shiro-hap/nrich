<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CircleDetails extends Model
{
    protected $table = 'circle_details';

    protected $fillable =
    [
        'summary',
        'number_of_men',
        'number_of_women',
        'location',
        'activity_frequency',
        'number_of_camps',
    ]




    use HasFactory;
}
