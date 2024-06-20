<?php

class Produtos
{

   private  $Data;
   private $Resultado;


    const BD = 'produtos';


   public function CriarProduto(array $data)
   {
        $this->Data = $data;

        if(in_array('', $this->Data)){
            $this->Resultado = false;
        }else{
            if(isset($this->Data['capa'])){
                $enviaFoto = new Uploads('../../uploads/');
                $enviaFoto->Image($this->Data['capa'], date('Y-m-d-').time());

            }
            if(isset($enviaFoto) && $enviaFoto->getResult()){
                $this->Data['capa'] = $this->Data['capa'] != null ? $enviaFoto->getResult() : null;

            $this->Banco();
            $this->Criar();
            }
           
        }
   }


   public function getResultado()
   {
    return $this->Resultado;
   }

   private function Banco()
   {
     $capa = $this->Data['capa'];
     unset($this->Data['capa']);

     $this->Data = array_map('addslashes', $this->Data);
     $this->Data = array_map('htmlspecialchars', $this->Data);
     $this->Data = array_map('trim', $this->Data);
     preg_replace('/[^[:alnum:]@]/','', $this->Data);

     $this->Data['capa'] = $capa;
     $this->Data['nome'] = (string) $this->Data['nome'];
     $this->Data['valor'] = (int) $this->Data['valor'];
     $this->Data['data'] = date('Y-m-d H:i:s');
     

   }

   private function Criar()
   {
    $criar = new Criar();
    $criar->Criacao(self::BD, $this->Data);
    if($criar->getResultado()){
        $this->Resultado = true;
    }else{
        $this->Resultado = false;
    }
   }

}

?>