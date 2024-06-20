<?php
/**********************************************************************
 * ********************************************************************
 * GERENTE DE ATUALIZAÇÃO GERAL MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
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
class Atualizar extends Conexao {

    private $Banco;
    private $Dados;
    private $SQL;
    private $Locais;
    private $Resultado;

    /*     * @var PDOStantement :: por Maykon Silveira maykonsilveira.com.br */
    private $Atualizar;

    /*     * @var PDO :: por Maykon Silveira */
    private $Conexao;

    //FAZ A ATUALIZAÇÃO
    public function Atualizando($Banco, array $Dados, $SQL, $Adicionais) {
        $this->Tabela = (string) $Banco;
        $this->Dados = $Dados;
        $this->Termos = (string) $SQL;
        
        parse_str($Adicionais, $this->Locais);
        $this->getSyntax();
        $this->Execute();
    }

    /** @var Retorna um Resultado de cadastro ou não :: por Maykon Silveira */
    public function getResultado() {
        return $this->Resultado;
    }

    /** @var FAZ A CONTAGEM DOS CAMPOS DA TABLEA :: por Maykon Silveira */
    public function getContaLinhas() {
        return $this->Atualizar->rowCount();
    }

    /**
     * <b>setLocais</b>
     * SERVE PARA ADICIONAR LIMIT, OFFSET E LINKS DE MANEIRA SIMPLIFICADA
     * @param STRING $Adicionais informe os links, limit e offset do BD exemplo: "name=Oliver&views=5&limit=7"
     * 
     * por Maykon Silveira */
    public function setLocais($Adicionais) {
        parse_str($Adicionais, $this->Locais);
        $this->getSyntax();
        $this->Execute();
    }

    /**
     * ***********maykonsilveira.com.br*************
     * ********** PRIVATE METHODS *************
     * ************MAYKON***SILVEIRA************
     */

    /** @var Faz a coneção com banco de dados por Maykon Silveira */
    private function Canectar() {

        $this->Conexao = parent::getCanectar();
        $this->Atualizar = $this->Conexao->prepare($this->Atualizar);
  
    }

    /** @var gera a syntax do mysql automaticamente por Maykon Silveira */
    private function getSyntax() {
        foreach ($this->Dados as $key => $Value):
            $Locais[] = $key .  ' = :' . $key;
        endforeach;
        
        $Locais = implode(', ', $Locais);
        $this->Atualizar = "UPDATE {$this->Tabela} SET {$Locais} {$this->Termos}";
    }

    /** @var Executa o PDO  por Maykon Silveira */
    private function Execute() {
        $this->Canectar();

        try {
            $this->Atualizar->execute(array_merge($this->Dados, $this->Locais));
            $this->Resultado = true;
        } catch (Exception $wt) {
            $this->Resultado = null;
            echo "<b>Erro ao Atulizar: {$wt->getMessage()}</b> - {$wt->getCode()}" ;
        }
    }

}
