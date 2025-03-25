<?php

namespace Database\Seeders;

use App\Livewire\Funcionario;
use App\Models\funcionarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FuncionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Funcionario::create([
            'nome' => 'bruno',
            'CPF' => '1233456',
            'email' => 'bruno@gmail.com',
            'password' => Hash::make('123456'),
            
        ]);
    }
}
