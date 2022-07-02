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
        ]);
        Produto::create([
            'nome' => 'produto2',
            'valor' => '00',
            'foto' => 'produto2.png',
            'descricao' => '',
        ]);
        Produto::create([
            'nome' => 'produto3',
            'valor' => '00',
            'foto' => 'produto3.png',
            'descricao' => '',
        ]);
    }
}
