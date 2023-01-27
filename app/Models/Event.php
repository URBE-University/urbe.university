<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'featured_image',
        'rsvp_url',
        'start_date',
        'end_date',
        'address',
        'published_at',
    ];
}
