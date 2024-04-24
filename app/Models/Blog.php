<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'image', 
        'short_desc',
        'long_desc',
        'status',
        'deleted',
    ];

    public function categories()
    {
        // return $this->belongsTo(BlogCategories::class, 'category', 'id');
        return $this->belongsToMany(BlogCategories::class, 'blog_categories_bridges', 'blog_id', 'cat_id');
    }
}
