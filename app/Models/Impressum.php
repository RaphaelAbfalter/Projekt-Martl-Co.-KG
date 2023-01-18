<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Impressum extends Model
{
    protected $table = 'impressum';
    protected $fillable = [
        'firmenanschrift', 'unternehmensgegenstand', 'UIDNummer',
        'GLN', 'GISA', 'telefonnummer', 'fax', 'email', 'adresse',
    ];
}
