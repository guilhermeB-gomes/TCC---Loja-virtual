<?php

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
 
class Ler extends Conexao{

    private $Seleciona;
    private $Locais;
    private $Resultado;
    private $Ler;
    private $Canectar;
    
    
    
    public function Leitura($BD, $SQL = null, $Adicionais = null)
    {
      
      if(!empty($Adicionais )):
          $this->Locais = $Adicionais ;
          parse_str($Adicionais , $this->Locais);
      endif;
      
      $this->Seleciona = "SELECT * FROM {$BD} {$SQL}";
      $this->Execute();
    }

    
    public function getResultado(){
        return $this->Resultado;
    }


    public function getContaLinhas() 
    {
        return $this->Ler->rowCount();
    }
    
 
    public function LeituraCompleta($Sql, $Adicionais = null)
    {
       
        $this->Seleciona = $Sql;
        if(!empty($Adicionais)):
          $this->Locais = $Adicionais;
          parse_str($Adicionais, $this->Locais);
         endif;
         $this->Execute();
         
    }
    
    
    public function setLocais($Adicionais)
    {
        parse_str($Adicionais, $this->Locais);
        $this->Execute();
    }

    private function Canectar()
    {
      
       $this->Canectar = parent::getCanectar();
       $this->Ler = $this->Canectar->prepare($this->Seleciona);
       $this->Ler->setFetchMode(PDO::FETCH_ASSOC);
        
    }

    
    private function getSheep()
    {
        if($this->Locais):
            foreach ($this->Locais as $sheep => $ms):
                if($sheep == 'limit' || $sheep == 'offset'):
                    $ms = (int) $ms;
                endif;
                $this->Ler->bindValue(":{$sheep}", $ms, ( is_int($ms) ? PDO::PARAM_INT : PDO::PARAM_STR ) );
            endforeach;
        endif;
    
    }


    private function Execute()
    {
        $this->Canectar();
        
        try {
            $this->getSheep();
            $this->Ler->execute();
            $this->Resultado = $this->Ler->fetchAll();
        } catch (Exception $ms) {
            $this->Resultado = null;
            print "<b>Erro ao ler: {$ms->getMessage()}</b> ";
        }
    }
  

}
