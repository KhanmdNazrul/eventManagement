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
        'speaker_id',
        'organiser_id',
        'country_id',
        'city_id'
    ];

    public function speaker(){
        return $this->belongsTo(Speaker::class);
    }

    public function organiser(){
        return $this->belongsTo(Organiser::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }
    
}
