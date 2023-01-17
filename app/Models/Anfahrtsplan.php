<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anfahrtsplan extends Model
{
    protected $table = 'anfahrtsplan';
    protected $fillable = [
        'addressOffice', 'driveToOffice', 'publicTransportToOffice',
        'addressWorkshop', 'driveToWorkshop', 'publicTransportToWorkshop'
    ];
}
