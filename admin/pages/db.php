<?php

$pages_all = function() use ($conn){
    $result = $conn->query("SELECT * FROM pages");
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id){
    //buscar uma páginas
};

$pages_create = function(){
    //criar páginas
    flash('Criou registro com sucesso', 'success');
};

$pages_edit = function($id){
    //editar página
    flash('Editou registro com sucesso', 'success');

};

$pages_delte = function($id){
    //deletar página
    flash('Removeu registro com sucesso', 'success');

};
