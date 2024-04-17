<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'fornecedor_teste';
        $fornecedor->site = 'site_teste';
        $fornecedor->UF = 'RN';
        $fornecedor->email = 'fssfs@gmail.com';
        $fornecedor->save();

        //metodo create(mais interessante)
        Fornecedor::create([
            'nome' => 'fornecedor2',
            'site' => 'site_teste2',
            'UF' => 'SP',
            'email' => 'dadsa.com',
        ]);

        //insert
        DB::table('fornecedores')->insert([
            'nome' => 'fornecedor3',
            'site' => 'site_teste3',
            'UF' => 'CE',
            'email' => 'eae.com',
        ]);
    }
}
