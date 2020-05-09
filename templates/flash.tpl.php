<?php
if($data['type'] === 'success'){
    $title = 'Sucesso!';
}elseif($data['type'] === 'warning'){
    $title = 'Cuidado!';
}elseif($data['type'] === 'danger'){
    $title = 'Erro!';
}
?>
$.notify({
title: '<strong><?php echo $title; ?></strong>',
message: '<?php echo $data['message'] ?>'
},{
type: '<?php echo $data['type']; ?>'
});