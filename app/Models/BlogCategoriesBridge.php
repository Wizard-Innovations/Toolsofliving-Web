<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategoriesBridge extends Model
{
    use HasFactory;

    
    protected $table = 'blog_categories_bridges';

    protected $fillable = [
        'cat_id',
        'blog_id',
        'status',
        'created_by',
        'updated_by',
        'deleted', 
    ];
}
