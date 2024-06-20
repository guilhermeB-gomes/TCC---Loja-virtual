<?php

ob_start();
require('../../sheep_core/config.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($produto['criarProduto'])){
    unset($produto['criarProduto']);
    $produto['capa'] = ($_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null);
 
    $salvar = new Produtos();
    $salvar->CriarProduto($produto);

    if($salvar->getResultado()){
        header("Location: ".HOME."./painel/index.php?sucesso=true");
    }else{
        header("Location: ".HOME."./painel/index.php?erro=true");
    }

}


?>