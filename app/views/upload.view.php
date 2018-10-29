<?php require APPROOT . '/views/inc/header.view.php'; ?>

<h2>Upload de Arquivos</h2><hr>

<form action="<?= URLROOT; ?>upload" method="POST" enctype='multipart/form-data' class="form">
    <h4>Upload simples</h4>
    <input type="file" name="arquivo">
    <input type="submit" name="enviarSimples" class="btn btn-primary ml-3"><br><br>
</form>

<?php if(isset($result_simples)) : ?>
    <span class="alert alert-info"><?= $result_simples; ?></span><br><br><br>
<?php endif; ?>

<form action="<?= URLROOT; ?>upload" method="POST" enctype='multipart/form-data' class="form">
    <h4>Upload multiplo</h4>
    <input type="file" name="arquivo[]" multiple>
    <input type="submit" name="enviarMultiplo" class="btn btn-primary ml-3"><br><br>
</form>

<?php if(isset($results_multiplos)) : ?>
    <?php foreach($results_multiplos as $result): ?>
        <span class="alert alert-info"><?= $result; ?></span><br><br><br>
    <?php endforeach; ?>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.view.php'; ?>