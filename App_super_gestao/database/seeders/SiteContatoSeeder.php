<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // SiteContato::create([
        //     'nome' => 'calabreso',
        //     'telefone' => '(88) 4545-5454',
        //     'email' => 'history.com',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'como ganhar dinheiro',
        // ]);

        SiteContato::factory(90)->create();
        //precisa chamar a classe --class=FornecedorSeeder 
    }
}
