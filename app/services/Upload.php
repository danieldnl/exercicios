<?php

namespace App\Services;

class Upload
{
    private static $formatosPermitidos = ['png', 'jpeg', 'jpg', 'gif'];
    private static $pasta = "./arquivos/";

    public static function simples($file)
    {
        $extensao = pathinfo($file['name'], PATHINFO_EXTENSION);
        
        if(!self::permitido($extensao))
            return "Formato do arquivo <strong>{$file['name']}</strong> não é válido.";

        $nomeArquivo = uniqid() . ".$extensao";
        if(move_uploaded_file($file['tmp_name'], self::$pasta . $nomeArquivo))
            return "Upload do arquivo <strong>{$file['name']}</strong> efetuado com sucesso.";

        return "Não foi possível efetuar o Upload do arquivo <strong>{$file['name']}</strong>.";
    }

    public static function multiplo($files)
    {
        $arquivo = [];
        $results = [];
        for($i = 0; $i < count($files['name']); $i++) {
            $arquivo['name'] = $files['name'][$i];
            $arquivo['tmp_name'] = $files['tmp_name'][$i];
            array_push($results, self::simples($arquivo));
        }
        return $results;
    }

    private static function permitido($extensao)
    {
        if(in_array($extensao, self::$formatosPermitidos))
            return true;

        return false;
    }
}