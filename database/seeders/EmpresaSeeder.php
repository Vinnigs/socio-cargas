<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nome' => 'Sócio Caminhoneiro',
            'slug' => 'socio-caminhoneiro',
            'user_id' => 2,
        ]);
    }
}
