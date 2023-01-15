<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'title', 'body', 'published_at'
    ];

    public static $rules = [
        'title' => 'required',
        'body' => 'required',
        'published_at' => 'required|date',
    ];
}
