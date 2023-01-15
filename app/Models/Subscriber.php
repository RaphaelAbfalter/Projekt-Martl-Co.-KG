<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'newsletter_subscribers';

    protected $fillable = [
        'email'
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
        'email' => 'required|email|unique:subscribers',
    ];
}
