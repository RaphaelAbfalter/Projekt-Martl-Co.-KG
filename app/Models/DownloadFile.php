<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DownloadFile extends Model
{
    protected $table = 'download_files';
    protected $fillable = ['path','user_id','visibility'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
