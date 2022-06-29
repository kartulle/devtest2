<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'produto1',
            'valor' => '00',
            'foto' => 'produto1.png',
            'descricao' => '',
            'categoria_id' => '1',
        ]);
    }
}
