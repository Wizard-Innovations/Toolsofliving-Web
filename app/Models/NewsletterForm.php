<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsletterForm extends Model
{
    use HasFactory;

    protected $table = 'newsletter_forms';

    protected $fillable = [
        'name',
        'email',
        'phone',  
        'city',
        'state',
        'message',
        'status',
        'deleted', 
    ];
}
