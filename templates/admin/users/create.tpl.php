<h3 class="mb-5">Creação de usuários</h3>

<form action="" method="post">
    <div class="form-group">
        <label for="usersEmail">Email</label>
        <input type="email" name="email" id="usersEmail" class="form-control" placeholder="seu email" required>
    </div>

    <div class="form-group">
        <label for="usersPassword">Senha</label>
        <input type="password" name="password" id="usersPassword" class="form-control" placeholder="sua senha" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<hr>
<a href="/admin/users/create" class="btn btn-secondary">Novo</a>