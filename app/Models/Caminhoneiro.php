<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caminhoneiro extends Model
{
    use HasFactory;

    protected $table = 'caminhoneiros';


    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function fretesCandidato(){
        return $this->belongsToMany(Frete::class);
    }

    
    public function fretesAtribuidos(){
        return $this->hasMany(Frete::class);
    }


    public function dados(){
        return $this->hasOne(Dado::class);
    }
}
