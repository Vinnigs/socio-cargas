<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    use HasFactory;

    protected $table = 'dados';

    protected $casts = [
        'veiculos' => 'array',
        'info_bancarias' => 'array',
        'info_pessoais' => 'array',
    ];

    protected $guarded = [];

    public function caminhoneiro(){
        return $this->belongsTo(Caminhoneiro::class);
    }
}
