<?php

use App\Livewire\Auth\Login;
use App\Livewire\Cliente as LivewireCliente;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/cadastro',  LivewireCliente::class);