<?php

//PASTA GERAL DE IMAGENS E ARQUIVOS CAMINHO DO PAINEL A MODELOS######################
define('SHEEP_IMG', './../sheep_temas/sheep-imagens/');

define('SHEEP_IMG_LOGO', '../../../sheep_temas/sheep-imagens-logo/');

//IMAGENS PARA O LAYUT EXTERNO GERAL DE IMAGENS E ARQUIVOS CAMINHO DO PAINEL A MODELOS######################
define('SHEEP_IMG_PAINEL', './sheep_temas/sheep-imagens/');

//PASTA GERAL DE vídeos CAMINHO DO PAINEL A MODELOS######################
define('SHEEP_AUDIO', '../../../sheep_temas/sheep-midias/');

//AQUI IREI ADICIONAR VERSÃO E MODELO######################
define('SHEEP_VERSAO','Versão: [ 1.0.0 ] - <b>Atualizado dia: 01/10/2021</b>');

//AQUI TEXTO DA VERSÃO VERSÃO E MODELO######################
define('sheep','<center><h2>Atenção!</h2></center><br>'
        . 'Este código de fonte é registrado e todos os direitos são reservados a empresa:<br> '
        . '<b>Maykon Silveira</b><br>'
        . '<p>Framework maykonsilveira.com.br e o código de fonte são patenteados. </p>');

/**********************************************************************
 * ********************************************************************
 * AUTO LOAD DO SITE MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
 * ********************************************************************
* MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**TECHNOLOGIES***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 28-09-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 * ********************************************************************
 */
function sheep_classes($sheepClasses) {

    $sheepDiretorio = ['diretor', 'funcionarios',  'gerentes_operacionais', 'gerentes'];
    $sheepFiscaliza = null;

    foreach ($sheepDiretorio as $sheepNomeDiretorio):
        if (!$sheepFiscaliza && file_exists(__DIR__ . '/' ."{$sheepNomeDiretorio}" . '/' ."{$sheepClasses}.php") && !is_dir(__DIR__  . '/' . "{$sheepNomeDiretorio}" . '/' ."{$sheepClasses}.php")):
            include_once (__DIR__  . '/' . "{$sheepNomeDiretorio}" . '/' ."{$sheepClasses}.php");
            $sheepFiscaliza = true;
        endif;
    endforeach;

    if (!$sheepFiscaliza):
        echo "Não foi possível incluir {$sheepClasses}.php";
        exit();
    endif;
}

spl_autoload_register("sheep_classes");


/**********************************************************************
 * ********************************************************************
 * VERIFICA SE É O IP DO SERVDOR E BLOQUEIA MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
 * ********************************************************************
* MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**TECHNOLOGIES***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 28-09-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 * ********************************************************************
 */



// verifica se e http ou https por Maykon Silveira ####################
if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ) {
    //if( isset(filter_input(INPUT_SERVER, 'HTTPS', FILTER_SANITIZE_STRIPPED)) && filter_input(INPUT_SERVER, 'HTTPS', FILTER_SANITIZE_STRIPPED) == 'on' ) {
         $https = 'https://';
        
    }else{
         $https = 'http://';
    }
    
    // DEFINE A URL DO SITE por Maykon Silveira ####################
    define('HOME', $https. SHEEP_URL); 	
    define('PASTA_DO_PAINEL', '/sheep_painel/'); 	
    define('URL_CAMINHO_PAINEL', HOME.'/'.PASTA_DO_PAINEL); 	
    define('SHEEP_LAYOUT', 'site');
    
    
    // PASTA DO MODELO E CHAMADAS MAYKON SILVEIRA MAYKONSILVEIRA.COM.BR
    //INCLUDE_PATCH = CAMINHO_TEMAS;
    //REQUIRE_PATH = SOLICITAR_TEMAS;
    define('CAMINHO_TEMAS', HOME . '/' . 'sheep_temas' . '/' . SHEEP_LAYOUT);
    define('SOLICITAR_TEMAS', 'sheep_temas' . '/' . SHEEP_LAYOUT);
    define('MODELO', 'sheep_temas' . '/' . SHEEP_LAYOUT);
    

//CONTROLE DE URLS SHEEP PHP - CURSOS ONLINE MAYKONSILVEIRA.COM.BR
define('FILTROS','sheep.php?m=');

//ICONE DO SITE SHEEP PHP - CURSOS ONLINE MAYKONSILVEIRA.COM.BR
define('SHEEP_ICONE', 'assets/img/logo/icone.png');

// LOGO DO PAINEL SHEEP PHP - CURSOS ONLINE MAYKONSILVEIRA.COM.BR
define('SHEEP_LOGO', 'assets/img/logo/LOGO-SHEEP-PHP-MAYKON-SILVEIRA2.png');

// TITULO PAINEL SHEEP PHP - CURSOS ONLINE MAYKONSILVEIRA.COM.BR
define('SHEEP_TITULO_PAINEL', 'Painel de Controle Sheep PHP - MaykonSilveira.com.br');

// RODAPE TEXTO PAINEL SHEEP PHP - CURSOS ONLINE MAYKONSILVEIRA.COM.BR
define('SHEEP_RODAPE_PAINEL', '<a href="https://maykonsilveira.com.br/" title="EAD MaykonSilveira.com.br">Todos os Direitos Reservados a EAD MaykonSilveira.com.br SHEEP PHP</a>');


/**
 * AQUI VERIFICA SE O IP TEM LINCEÇA PARA USAR ESTE SISTEMA MAYKON SILVEIRA
 *  
 */

$ipsheep =filter_input(INPUT_SERVER, 'SERVER_ADDR', FILTER_SANITIZE_STRIPPED);
if($ipsheep == '::1' || $ipsheep == '127.0.0.1'){
 null;
}else{

$Assunto = 'UM SITE INSTALADO COM SHEEP PHP DOMINIO: '.$_SERVER['SERVER_NAME'] ; 
$DestinoNome = 'Sheep PHP - Aluno Maykon Silveira';
$DestinoEmail = 'contato@webtecpr.com.br';
                                                                
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF8' . "\r\n";
$Mensagem = "DOMINIO: {$_SERVER['SERVER_NAME']} <br> IP SERVIDOR: {$_SERVER['SERVER_ADDR']}";
mail($DestinoEmail, $Assunto, $Mensagem, $headers);
        

}



?>