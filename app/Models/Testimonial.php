<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'attendee_id',
        'subject',
        'remarks',
    ];

    public function attendee(){
        return $this->belongsTo(Attendee::class);
    }
}
