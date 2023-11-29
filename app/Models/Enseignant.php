<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected $primaryKey = 'numeroSOM';
    protected $table = 'enseignants';
    protected $fillable = [
        'numeroSOM',
        'nom',
        'prenom',
        'numTel',
        'adresse',
        'ville',
        'codePostal',
        'idSpecialite'
    ];

    public function modules()
    {
        return $this->belongsToMany(Module::class, 'ensigners', 'numeroSOM', 'idModule');
    }

    public function classes()
    {
        return $this->belongsToMany(Classe::class, 'ensigners', 'numeroSOM', 'idClasse');
    }

    public function spesalite()
    {
        return $this->hasOne(Specialite::class, 'id', 'idSpecialite');
    }

    public function cahierTextes()
    {
        return $this->hasMany(Cahiertexte::class, 'numeroSOM', 'numeroSOM');
    }

    public function user()
    {
        return $this->hasOne(User::class,'numeroSOM');
    }

}
