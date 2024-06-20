<?php

class Usuarios
{

    private $Data;
    private $Resultado;

    const BD = 'usuarios';

    public function CriarUsuario(array $data)
    {

        $this->Data = $data;

        if(in_array('', $this->Data)){

            $this->Resultado = false;
          
        }else{
            $this->Banco();
            $this->Criar();
        }

    }

    public function getResultado()
    {
        return $this->Resultado;
    }


    //private

    private function Banco()
    {
        $this->Data = array_map('addslashes', $this->Data);
        $this->Data = array_map('htmlspecialchars', $this->Data);
        $this->Data = array_map('trim', $this->Data);
        preg_replace('/[^[:alnum:]@]/', '',  $this->Data);

        $this->Data['nome'] = (string) $this->Data['nome'];
        $this->Data['fone'] = (string) $this->Data['fone'];
        $this->Data['email'] = (string) $this->Data['email'];
        $this->Data['cpf'] = (string) $this->Data['cpf'];
        $this->Data['data'] = date('Y-m-d H:i:s');
        
    }


    private function Criar()
    {
        $criar = new Criar();
        $criar->Criacao(self::BD, $this->Data);
        if(!$criar->getResultado()){
            $this->Resultado = false;
        }else{
            $this->Resultado = true;
        }
    }

}

?>