<?php

use App\Livewire\Produtos as LivewireProdutos;
use App\Models\Produtos;
use Illuminate\Support\Facades\Route;

Route::get('/produtos',  LivewireProdutos::class);