<?php

namespace App\Livewire;

use App\Models\Produtos as ModelsProdutos;
use Livewire\Component;

class Produtos extends Component
{

    public $nome;
    public $ingredientes;
    public $valor;

    
    protected $rules = [
        'nome' => 'required',
        'ingredientes' => 'required',
        'valor' => 'required'
    ];

    protected $messages = [
        'nome.required' => 'nome obrigatório',
        'ingredientes.required' => 'ingredientes obrigatório',
        'valor.required' => 'valor obrigatório',
        
    ];

    public function render()
    {
        return view('livewire.produtos');
    }

    public function store(){
        ModelsProdutos::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
            
        ]); 

        session()->flash('success', 'Cadastro Realizado');
        
    }
}
