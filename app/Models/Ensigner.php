<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ensigner extends Model
{
    // relation fort entre Ensaignant est class est
    use HasFactory;
    protected $table = 'ensigners';
    protected $fillable = [
        'numeroSOM',
        'idClasse',
        'idModule'
    ];

    
}
