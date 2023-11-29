<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cahiertexte extends Model
{
    use HasFactory;
    protected $table= 'cahiertextes';
    protected $fillable = [
        'numeroSOM',
        'idClasse',
        'date',
        'heurDebut',
        'heurFin',
        'texte'
    ];

    public function enseignant()
    {
        return $this->hasOne(Enseignant::class, 'numeroSOM', 'numeroSOM');
    }

    public function classe()
    {
        return $this->hasOne(Classe::class, 'id', 'idClasse');
    }
}
