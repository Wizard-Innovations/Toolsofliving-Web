<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComments extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_id',
        'user_id',
        'comment',
        'status',
        'created_by',
        'updated_by',
        'deleted', 
    ];
    public function user()
    {
        return $this->hasOne(User::class, 'id','user_id');

    }
    public function blog()
    {
        return $this->hasOne(Blog::class, 'id','blog_id');

    }
}
