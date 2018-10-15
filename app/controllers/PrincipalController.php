<?php

namespace App\Controllers;

class PrincipalController 
{
    public function index()
    {
        $dados['menus'] = \App\Services\Menu::listarMenus();
        return view('index', $dados);
    }
    
}