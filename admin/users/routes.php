<?php

include __DIR__ . '/db.php';

if(resolve('/admin/users')){
    render('admin/users/index', 'admin');
}elseif(resolve('/admin/users/create')){
    render('/admin/users/create', 'admin');
}elseif(resolve('/admin/users/(\d+)')){
    render('admin/users/view', 'admin');
}elseif(resolve('/admin/users/(\d+)/edit')){
    render('admin/users/edit', 'admin');
}elseif(resolve('/admin/users/(\d+)/delete')){
    return header('location: /admin/users');
}