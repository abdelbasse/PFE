<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    protected $table = 'notes';
    protected $fillable = [
        'note',
        'codeMassar',
        'idModule',
        'numeroSom',
        'Numero_Semestr',
        'Numero_Control'
    ];
}
