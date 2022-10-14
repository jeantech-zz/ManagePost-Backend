<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'posts';

    protected $fillable = [
        'creator', 'title','description', 'photo'
    ];
}