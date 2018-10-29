<?php

namespace App\Services;

class Menu
{
    public static function listarMenus() {
        $arr= [
            ["nome" => "FTP", "link" => URLROOT . "ftp"],
            ["nome" => "Calc", "link" => URLROOT . "calc"],
            ["nome" => "Upload", "link" => URLROOT . "upload"],
        ];
        
        return $arr;
    }
}

