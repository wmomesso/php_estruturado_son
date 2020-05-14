<h3 class="mb-5">Detalhes do usuário</h3>

<dl class="rol">
    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= $data['user']['email'] ?></dd>

    <dt class="col-sm-3">Criado em</dt>
    <dd class="col-sm-9"><?= $data['user']['created'] ?></dd>

    <dt class="col-sm-3">Atualizado em</dt>
    <dd class="col-sm-9"><?= $data['user']['updated'] ?></dd>
</dl>

<p>
    <a href="/admin/users/<?= $data['user']['id'] ?>/edit" class="btn btn-warning">Editar</a>
    <a href="/admin/users/<?= $data['user']['id'] ?>/delete" class="btn btn-danger confirm">Excluir</a>
</p>

<a href="/admin/users" class="btn btn-secondary">Voltar</a>