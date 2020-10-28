<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'body',
        'likes'
    ];

    public function getPosts(){
        return Post::all(); // -> PostControllershi
    }

    public function user(){
        return $this->belongsTo(User::class);
    }


}
