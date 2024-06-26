<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {
        // Definição de variáveis
        $nome = 'Heitor';
        $idade = 20;

        // Array de números
        $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

        // Array de nomes
        $nomes = ['Heitor', 'João', 'Maria', 'José'];

        // Retorno da view 'welcome' com variáveis passadas para a view
        return view('welcome', [
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => 'Desenvolvedor',
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create()
    {
        return view('events.create');
    }
}
