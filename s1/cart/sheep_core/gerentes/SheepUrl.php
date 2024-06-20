<?php
/**********************************************************************
 * ********************************************************************
 * GERENTE DE LINKS E URLS MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
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

class SheepUrl {

    private $File;
    private $SheepUrl;

    /** DATA */
    private $Local;
    private $Patch;
    private $Tags;
    private $Data;

    /** @var Google */
    private $Google;
    
    function __construct() {
        $this->Local = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
        $this->Local = ($this->Local ? $this->Local : 'index');
        $this->Local = explode('/', $this->Local);
        $this->File = (isset($this->Local[0]) ? $this->Local[0] : 'index');
        $this->SheepUrl = (isset($this->Local[1]) ? $this->Local[1] : null);
        $this->Google = new Google($this->File, $this->SheepUrl);
    }

    public function getTags() {
        $this->Tags = $this->Google->getTags();
        echo $this->Tags;
    }

    public function getData() {
        $this->Data = $this->Google->getData();
        return $this->Data;
    }

    public function getLocal() {
        return $this->Local;
    }

    public function getPatch() {
        $this->setPatch();
        return $this->Patch;
    }

    //PRIVATES
    private function setPatch() {
        if (file_exists(SOLICITAR_TEMAS . DIRECTORY_SEPARATOR . $this->File . '.php')):
            $this->Patch = SOLICITAR_TEMAS . DIRECTORY_SEPARATOR . $this->File . '.php';
        elseif (file_exists(SOLICITAR_TEMAS . DIRECTORY_SEPARATOR . $this->File . DIRECTORY_SEPARATOR . $this->SheepUrl . '.php')):
            $this->Patch = SOLICITAR_TEMAS . DIRECTORY_SEPARATOR . $this->File . DIRECTORY_SEPARATOR . $this->SheepUrl . '.php';
        else:
            $this->Patch = SOLICITAR_TEMAS . DIRECTORY_SEPARATOR . '404.php';
        endif;
    }

}
