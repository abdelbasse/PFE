<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialite extends Model
{
    use HasFactory;
    protected $table = 'specialites';
    protected $fillable = [
        'nomSpesialite'
    ];

    public function enseignants(){
        return $this->hasMany(Enseignant::class,'idSpecialite');
    }
}
