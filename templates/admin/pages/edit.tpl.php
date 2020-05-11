<h3 class="mb-5">Edição de página</h3>
<form action="" method="post">
    <div class="form-group">
        <label for="pagesTitle">Título</label>
        <input name="title" id="pagesTitle" class="form-control" type="text" placeholder="Aqui vai o título da página..." value="<?= $data['page']['title'] ?>">
    </div>

    <div class="form-group">
        <label for="pagesUrl">URL</label>
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">/</span>
        </div>
        <input name="url" id="pagesUrl" class="form-control" type="text" placeholder="Url amigável, deixar em branco para página inicial..." value="<?= $data['page']['url'] ?>">
    </div>
    </div>

    <div class="form-group">
        <input name="body" id="pagesBody" type="hidden" value="<?= $data['page']['body'] ?>">
        <trix-editor input="pagesBody"></trix-editor>
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<hr>
<a class="btn btn-secondary" href="/admin/pages/<?= $data['page']['id'] ?>">Voltar</a>