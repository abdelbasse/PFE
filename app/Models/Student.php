<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'codeMasser',
        'nom',
        'prenom',
        'numTel',
        'email',
        'dateNaissence',
        'adresse',
        'ville',
        'codePostal',
        'idClasse'
    ];

    public function classe(){
        return $this->hasOne(Classe::class,'id','idClasse');
    }

    public function user()
    {
        return $this->hasOne(User::class,'CodeMassar','codeMasser');
    }
}
