<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

class Driveplan extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'mail',
        'message'
    ];

    /**
     * The attributes that are excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
