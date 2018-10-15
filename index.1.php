<?php
//ini_set('display_errors', 'On');
//error_reporting(E_ALL | E_STRICT);
include_once 'FtpGepas.Class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $ftp = new FtpGepas($_POST['usuario'], $_POST['senha']);
        $classe = "success";
        $msg = "Conexão FTP efetuado com sucesso";
    } catch (Exception $e) {
        $classe = "danger";
        $msg = $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <?php if (isset($msg)): ?>
            <div class="alert alert-<?php echo $classe; ?>"><?php echo $msg; ?></div>
        <?php endif;?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mt-5">
                <div class="col-md-3 form-group">
                    <input class="form-control" type="text" name="usuario" placeholder="Digite o nome de usuário:">
                </div>
                <div class="col-md-3 form-group">
                    <input class="form-control" type="password" name="senha" placeholder="Digite a senha:">
                </div>
                <div class="col">
                    <input class="btn btn-success" type="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>
</body>
</html>