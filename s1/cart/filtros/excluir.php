<?php

ob_start();
require('../sheep_core/config.php');

$del = filter_input(INPUT_POST,'id_produto', FILTER_VALIDATE_INT);

if(isset($del)){

    $excluir = new Excluir();
    $excluir->Remover('carrinho', "WHERE id_produto = :id", "id={$del}");
    if($excluir->getResultado()){
        header("Location: ".HOME."/index.php?sucesso=true");
    }else{
        header("Location: ".HOME."/index.php?erro=true");
    }
}



?>