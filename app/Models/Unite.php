<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unite extends Model
{
    use HasFactory;
    protected $table = 'unites';
    protected $fillable = [
        'nomUnite'
    ];

    public function modules(){
        return $this->hasMany(Module::class,'idUnite','id');
    }
}
