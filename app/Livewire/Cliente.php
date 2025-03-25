<?php

namespace App\Livewire;

use App\Models\Cliente as ModelsCliente;
use Livewire\Component;

class Cliente extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $CPF;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.cliente');
    }

    public function store(){
        ModelsCliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'CPF' => $this->CPF,
            'email' => $this->email,
            'password' => $this->password,

        ]); 

        session()->flash('success', 'Cadastro Realizado');
        
    }
}
