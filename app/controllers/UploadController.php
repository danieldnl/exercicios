<?php

namespace App\Controllers;

Use App\Services\Upload;

class UploadController 
{
    public function upload()
    {
        $dados['menus'] = \App\Services\Menu::listarMenus();
        
        if(isset($_POST['enviarSimples'])) 
            $dados['result_simples'] = Upload::simples($_FILES['arquivo']);

        if(isset($_POST['enviarMultiplo'])) 
            $dados['results_multiplos'] = Upload::multiplo($_FILES['arquivo']); 
        
        return view('upload', $dados);
    }
    
}