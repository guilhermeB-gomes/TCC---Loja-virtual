<?php
/*************************************************************************************
 * ***********************************************************************************
 * CONFIGURAÇÕES FRAMEWORK SEEP PHP CRIADO POR MAYKON SILVEIRA - MAYKONSILVEIRA.COM.BR
 * 
 * SOMOS TODOS(A) OVELHAS DO NOSSO MESSIAS E FILHOS DO ANCIÃO DE DIAS O SENHOR DOS EXÉRCITOS
 * QUE O NOSSO BENDITO PAI ABENÇOE SUA VIDA E SEUS PROJETOS
 * NUNCA MINTA, SEJA SEMPRE HONESTO E JUSTO, USE ESTE FRAMEWORDK PARA O BEM E NUNCA PARA O MAU
 * QUE O ETERNO PAI TE DÊ SABEDORIA E MUITAS FELICIDADES:
 * 
 
 * QUE A PAZ ESTE COM VOCÊ ASS: MAYKON SILVEIRA
 * ************************************************************************************
 * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*****************
 * *************MAYKON***SILVEIRA*******************************************************
 * *************sheep**TECHNOLOGIES****************************************************
* **************************************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 28-09-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ************************************************************************************
 */

 // determina o padrão de datas
date_default_timezone_set('America/Sao_Paulo');

/**********************************************************************
 * ********************************************************************
 * GERENTE DE LETURA GERAL MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
 * MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**PHP***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 01-10-2021 POR MAYKON SILVEIRA
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 */

//configurações do bando de dados
define('SHEEP_URL', 'localhost/s1/cart');//ou dominio exemplo: maykonsilveira.com.br
define('SHEEP_HOST','localhost');
define('SHEEP_USER','root');
define('SHEEP_SENHA','');
define('SHEEP_BD','loja');




/**********************************************************************
 * ********************************************************************
 * DADOS DO SITE MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
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
define('SITENAME', "Nome do site");
define('SITEDESC', "Nome do site" );
define('SITELOGO',"Nome do site" );
define('SITEICONE', "Nome do site" );
define('FONE', "Nome do site" );
define('CNPJ', "Nome do site" );
define('CELULAR', "Nome do site" );
define('EMAIL', "Nome do site" );
define('ATENDIMENTO', "Nome do site");
define('ENDERECO', "Nome do site" );
define('NUMERO', "Nome do site" );
define('CEP', "Nome do site" );
define('CIDADE',"Nome do site" );
define('ESTADO', "Nome do site");
define('FACEBOOK', "Nome do site");
define('INSTAGRAM', "Nome do site" );
define('TWITTER', "Nome do site" );
define('YOUTUBE', "Nome do site" );
define('GOOGLE_TITULO', "Nome do site" );
define('GOOGLE_DESC', "Nome do site" );
define('GOOGLE_TAGS', "Nome do site" );
define('GOOGLE_VERIFY', "Nome do site" );
define('FACEBOOK_PIXEL', "Nome do site");
define('LINKS_PADROES', "Nome do site" );
define('DESATIVAR_MOUSE', "Nome do site" );
define('RODAPE', "Nome do site" );





/**********************************************************************
 * ********************************************************************
 * PHPMAILER E SEND GRIND MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
 * 
 * ********************************************************************
* MAYKONSILVEIRA.COM.BR DEREICIONANDO VOCÊ PARA O CAMINHO DO SUCESSO #*
 * *************MAYKON***SILVEIRA**************************************
 * *************sheep**TECHNOLOGIES***********************************
 * ********************************************************************
 * TUDO AQUI FOI CRIADO NO DIA 28-09-2021 POR MAYKON SILVEIRA EAD 
 * TODOS OS DIREITOS RESERVADOS E CÓDIGO FONTE RASTREADO COM ARQUIVOS 
 * CRIADO POR MAYKONSILVEIRA.COM.BR DESDE 2007 *********
 * TODA SABEDORIA PARA CRIAR ESTES SISTEMAS VEM DO SANTO E ETERNOR PAI
 * O SANTO SENHOR DEUS DE ABRAÃO, ISSAC E JACÓ E DO MEU ÚNICO SENHOR 
 * O MESSIAS NOSSO SALVADOR, POIS A GLROIA É DO PAI E DO FILHO PARA SEMPRE
 * ********************************************************************
 * ********************************************************************
 */

define('EMAIL_PHPMAILER_SECURE', 'tls');
define('EMAIL_PHPMAILER_CHARSET', 'utf-8');
define('EMAIL_PHPMAILER_HOST', 'mail.MAYKONSILVEIRA.COM.BR');
define('EMAIL_PHPMAILER_USERNAME', 'sheepnotificacoes@MAYKONSILVEIRA.COM.BR');
define('EMAIL_PHPMAILER_PASS', '');
define('EMAIL_PHPMAILER_PORT', "587");
define('EMAIL_PHPMAILER_QUEM_ENVIA', "");
define('EMAIL_PHPMAILER_QUEM_ENVIA_NOME', SITENAME);

require_once('includes.php');

?>

