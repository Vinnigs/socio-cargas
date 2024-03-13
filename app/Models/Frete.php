<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frete extends Model
{
    use HasFactory;

    protected $table = 'fretes';


    public function atributos(){
        return $this->belongsTo(Atributo::class);
    }


    public function empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function caminhoneiros(){
        return $this->belongsToMany(Caminhoneiro::class);
    }

    public function caminhoneiroAtribuido(){
        return $this->belongsTo(Caminhoneiro::class, 'caminhoneiro_id');
    }
}
