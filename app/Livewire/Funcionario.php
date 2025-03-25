<?php

namespace App\Livewire;

use App\Models\funcionarios;
use Livewire\Component;

class Funcionario extends Component
{

    public $nome;
    public $CPF;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.funcionario');
    }

    public function store(){
        funcionarios::create([
            'nome' => $this->nome,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'password' => $this->password,

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        
    }
}
