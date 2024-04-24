<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategories extends Model
{
    use HasFactory;

    protected $table = 'blog_categories';

    protected $fillable = [
        'name',
        'slug',
        'status',
        'created_by',
        'updated_by',
        'deleted', 
    ];

    public function blogs()
    {
        // return $this->belongsTo(BlogCategories::class, 'category', 'id');
        return $this->hasMany(Blog::class, 'blog_categories_bridges', 'cat_id', 'blog_id');
    }
}
