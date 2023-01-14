<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $fillable = [
        'email', 'title', 'text', 'published_at'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->email = strtolower($model->email);
        });
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function scopeEmail($query, $email)
    {
        return $query->where('email', strtolower($email));
    }

    public static $rules = [
        'email' => 'required|email|unique:newsletters',
        'title' => 'required',
        'text' => 'required',
        'published_at' => 'required|date',
    ];
}
