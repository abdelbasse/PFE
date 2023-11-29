<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $fillable = [
        'nomModule',
        'idUnite'
    ];

    public function unite(){
        return $this->hasOne(Unite::class,'id','idUnite');
    }
}
