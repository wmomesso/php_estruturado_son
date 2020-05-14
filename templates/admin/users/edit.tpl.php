<h3 class="mb-5">Edição de usuários</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="email" name="email" id="usersEmail" class="form-control" placeholder="seu email" required value="<?= $data['user']['email'] ?>">
    </div>

    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input type="password" name="password" id="usersPassword" class="form-control" placeholder="sua senha">
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>
<hr>
<a href="/admin/users/<?= $data['user']['id'] ?>" class="btn btn-secondary">Voltar</a>