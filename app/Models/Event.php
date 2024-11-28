<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'image',
        'address',
        'num_tickets',
        'attendee_id',
        'speaker_id',
        'organiser_id',
        'country_id',
        'city_id'
    ];
}
