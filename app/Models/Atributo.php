<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atributo extends Model
{
    use HasFactory;

    protected $table = 'atributos';

    protected $casts = [
        'endereco_origem' => 'array',
        'endereco_destino' => 'array',
        'veiculos_pesados' => 'array',
        'veiculos_medios' => 'array',
        'veiculos_leves' => 'array',
        'carroceria' => 'array',
        'peso' => 'array',
        'pagamento' => 'array',
        'tipo_carga' => 'array',
    ];

    protected $guarded = [];


    public function frete(){
        return $this->hasOne(Frete::class);
    }
}
