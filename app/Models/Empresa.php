<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


    public function fretes(){
        return $this->hasMany(Frete::class, 'empresa_id');
    }
}
