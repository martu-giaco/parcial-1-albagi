<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    protected $table = 'posteos';

    protected $primaryKey = 'post_id';

    //sacado de chatgpt pq quería que tags sea un array jsjsj, a chequear si funca
    protected $casts = [
        'tags' => 'array',
    ];

    protected $fillable = ['author', 'title', 'summary', 'content'];
}
