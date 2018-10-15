<?php

namespace App\Services;

use Exception;


class FtpGepas
{

    private $conexao;
    private $usuario;
    private $senha;
    private $servidor = "test.rebex.net";
    private $pastaGepas = "./";
    private $pastaLocal;

    public $conectado = false;

    public function __construct($usuario, $senha)
    {
        $this->pastaLocal = $_SERVER['DOCUMENT_ROOT'] . "/view/manutencao/tmp_upload/";
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->conectar();
    }

    private function conectar()
    {
        $this->conexao = ftp_connect($this->servidor);
        if ($this->conexao === false) {
            throw new Exception("Não foi possível efetuar a conexão com o FTP.");
        }

        $login = ftp_login($this->conexao, $this->usuario, $this->senha);
        if ($login === false) {
            throw new Exception("Usuário ou senha inválidos.");
        }
        $this->conectado = true;
    }

    public function efetuarDownload($arquivoServidor)
    {
        $arquivoLocal = $this->pastaLocal . substr($arquivoServidor, 8, 32);
        ftp_get($this->conexao, $arquivoLocal, $arquivoServidor, FTP_ASCII);
        return $arquivoLocal;
    }

    public function listarArquivos()
    {
        return ftp_nlist($this->conexao, $this->pastaGepas);
    }

    public function fecharConexao()
    {
        ftp_close($this->conexao);
    }

}
