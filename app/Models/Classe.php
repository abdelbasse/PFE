<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    protected $table = 'classes';
    protected $fillable = [
        'niveau',
        'idFiliere'
    ];


    public function students()
    {
        return $this->hasMany(Student::class, 'idClasse');
    }

    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class, 'ensigners', 'idClasse', 'numeroSOM');
    }

    public function filier()
    {
        return $this->hasOne(Filiere::class, 'id', 'idFiliere');
    }
}
