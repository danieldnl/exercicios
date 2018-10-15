<?php require APPROOT . '/views/inc/header.view.php';?>


<h1>FTP</h1>
<div class="row">
    <?php if (isset($msg)): ?>
        <div class="alert alert-<?php echo $classe; ?>"><?php echo $msg; ?></div>
    <?php endif;?>
    <form action="<?= URLROOT?>ftp" method="post">
    <div class="">
        <div class="col form-group">
            <input class="form-control" type="text" name="usuario" placeholder="Digite o nome de usuário:">
        </div>
        <div class=" col form-group">
            <input class="form-control" type="password" name="senha" placeholder="Digite a senha:">
        </div>
        <div class="col">
            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </div>
    </form>
</div>




<?php require APPROOT . '/views/inc/footer.view.php';?>