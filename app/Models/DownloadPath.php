<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;

class DownloadPath extends Model
{
    protected $fillable = ['name','path','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
