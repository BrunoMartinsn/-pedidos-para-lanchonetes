<?php

namespace Database\Seeders;

use App\Livewire\Produtos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produtos::create([
            'nome' => 'lucas',
            'ingredientes' => 'farinha',
            'valor' => 'R$ 00,00',
            
            
        ]);

    }
}
