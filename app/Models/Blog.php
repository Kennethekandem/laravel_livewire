<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'blogs';


    protected $fillable = [
        'title',
        'description',
        'likes',
        'dislikes'
    ];
}
