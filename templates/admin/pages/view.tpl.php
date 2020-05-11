<h3>Visualização de página</h3>
<?php
//var_dump($data);

?>
<div class="row">
<div class="col-md-3">
    <dl class="row">
        <dt class="col-sm-4">Título</dt>
        <dd class="col-sm-8"><?= $data['page']['title'] ?></dd>

        <dt class="col-sm-4"><?= $data['page']['url'] ?></dt>
        <dd class="col-sm-8">/ - <a href="/" target="_blank" rel="noopener noreferrer">Abrir</a></dd>

        <dt class="col-sm-4">Criado em</dt>
        <dd class="col-sm-8"><?= $data['page']['created'] ?></dd>

        <dt class="col-sm-4">Atualizado em</dt>
        <dd class="col-sm-8"><?= $data['page']['updated'] ?></dd>
    </dl>
</div>
<div class="col bg-light">
<?= $data['page']['body'] ?>
</div>
</div>
<p>
    <a href="/admin/pages/<?= $data['page']['id'] ?>/edit" class="btn btn-warning">Editar</a>
    <a href="/admin/pages/<?= $data['page']['id'] ?>/delete" class="btn btn-danger confirm">Excluir</a>
</p>
<a class="btn btn-secondary" href="/admin/pages">Voltar para a home</a>