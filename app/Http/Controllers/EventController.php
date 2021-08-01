<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $nome = 'paula';
        $idade = 17;

        $nomes = [
            'Maria',
            'Ana',
            'Joana',
            'Mariana'
        ];


        $arr = [1, 2, 3, 4, 5, 6];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function products()
    {
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }
}
