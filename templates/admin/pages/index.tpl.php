<h3 class="mb-5">Administração de páginas</h3>

<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Página</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($data['pages'] as $page) : ?>
    <tr>
        <td><?php echo $page['id'] ?></td>
        <td><a href="/admin/pages/<?php echo $page['id'] ?>/edit"><?php echo $page['title'] ?></a></td>
        <td class="text-right"><a class="btn btn-primary btn-sm" href="/admin/pages/<?php echo $page['id'] ?>">Ver</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<a class="btn btn-secondary" href="/admin/pages/create">Novo</a>
