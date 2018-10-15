<?php

use PHPUnit\Framework\TestCase;
use App\Services\FtpGepas;

/**
 * FtpGepas Caso de Teste.
 */
class FtpGepasTest extends TestCase
{

    private $ftpGepas;

    public function testConectar_deve_retornar_verdadeiro() 
    {   
        $ftpGepas = new FtpGepas("demo", "password");
        
        $this->assertTrue($ftpGepas->conectado);
    }
    
}

