<?php

function flash($message = null, $type = null){
    if($message){
        //armazena a mensagem
        $_SESSION['flash'][] = compact('message', 'type');

    }else{
        //exibe a mensagem
        $flash = $_SESSION['flash'] ?? [];
        if(!count($flash)){
            return;
        }

        foreach($flash as $key => $message){
            render('flash', 'ajax', $message);
            unset($_SESSION['flash']);
        }
    }
}