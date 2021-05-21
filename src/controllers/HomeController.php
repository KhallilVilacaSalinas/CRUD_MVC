<?php

namespace src\controllers;

use \core\Controller;


class HomeController extends Controller
{

    public function index()
    {
        $posts = [
            ['titulo' => 'Titulo de teste 1', 'corpo' => 'corpo de teste 1'],
            ['titulo' => 'Titulo de teste 2', 'corpo' => 'corpo de teste 2'],
            ['titulo' => 'Titulo de teste 3', 'corpo' => 'corpo de teste 3'],
            ['titulo' => 'Titulo de teste 4', 'corpo' => 'corpo de teste 4'],
            ['titulo' => 'Titulo de teste 5', 'corpo' => 'corpo de teste 5'],
            ['titulo' => 'Titulo de teste 6', 'corpo' => 'corpo de teste 6'],
        ];

        $name = 'Khallil';

        $this->render('home', [
            'nome' => $name,
            'idade' => 18,
            'posts' => $posts
        ]);
    }

    public function sobre()
    {
        $this->render('sobre');
    }

    public function sobreP($args)
    {
        print_r($args);
    }
}
