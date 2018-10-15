<?php

use Core\Request;
use Core\Router;

/**
 * Autoload de classes e funcoes usando o composer
 */
require "vendor/autoload.php";

/**
 * Inicializa arquivos de configuração
 */
require './core/bootstrap.php';

if (ENV == 'DEV') {
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
}

Router::load('./app/routes.php')->direct(Request::uri(), Request::method());
