<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'excerpt',
        'content',
        'featured_image',
        'featured_image_alt_text',
        'keywords',
        'keyphrases',
        'enable_comments',
        'published_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
