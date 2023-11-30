<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablePost extends Model
{
    protected $table = 'table_posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'content',
        'contentDisplay',
        'tags',
        'status',
        'author'
    ];
}
