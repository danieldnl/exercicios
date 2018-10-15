<?php

namespace App\Controllers;

use App\Services\FtpGepas;
use Exception;


class FtpController 
{
    public function ftp()
    {
        $dados['menus'] = \App\Services\Menu::listarMenus();
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            try {
                $ftp = new FtpGepas($_POST['usuario'], $_POST['senha']);
                $dados["classe"] = "success";
                $dados["msg"] = "Conexão FTP efetuada com sucesso";
            } catch (Exception $e) {
                $dados['classe'] = "danger";
                $dados['msg'] = $e->getMessage();
            }
            
        }
        
        return view('ftp', $dados);
        
    }
}