<?php
/**********************************************************************
 * ********************************************************************
 * GERENTE DE FORMATAÇÃO MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
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
class Formata {

   private static $Data;
    private static $Format;

    /**
     * <b>Verifica E-mail:</b> Executa validação de formato de e-mail. Se for um email válido retorna true, ou retorna false.
     * @param STRING $Email = Uma conta de e-mail
     * @return BOOL = True para um email válido, ou false
     */
    public static function Email($Email) {
        self::$Data = (string) $Email;
        self::$Format = '/[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/';

        if (preg_match(self::$Format, self::$Data)):
            return true;
        else:
            return false;
        endif;
    }

 
    public static function Name($Name) {
        self::$Format = array();
        self::$Format['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
        self::$Format['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

        self::$Data = strtr(utf8_decode($Name), utf8_decode(self::$Format['a']), self::$Format['b']);
        self::$Data = strip_tags(trim(self::$Data));
        self::$Data = str_replace(' ', '-', self::$Data);
        self::$Data = str_replace(array('-----', '----', '---', '--'), '-', self::$Data);

        return strtolower(utf8_encode(self::$Data));
    }
    
 

    /**
     * <b>Tranforma Data:</b> Transforma uma data no formato DD/MM/YY em uma data no formato TIMESTAMP!
     * @param STRING $Name = Data em (d/m/Y) ou (d/m/Y H:i:s)
     * @return STRING = $Data = Data no formato timestamp!
     */
    public static function Data($Data) {
        self::$Format = explode(' ', $Data);
        self::$Data = explode('/', self::$Format[0]);

        if (empty(self::$Format[1])):
            self::$Format[1] = date('H:i:s');
        endif;

        self::$Data = self::$Data[2] . '-' . self::$Data[1] . '-' . self::$Data[0] . ' ' . self::$Format[1];
        return self::$Data;
    }

    public static function LimitaTextos($String, $Limite, $Pointer = null) {
        self::$Data = strip_tags(trim($String));
        self::$Format = (int) $Limite;

        $ArrWords = explode(' ', self::$Data);
        $NumWords = count($ArrWords);
        $NewWords = implode(' ', array_slice($ArrWords, 0, self::$Format));

        $Pointer = (empty($Pointer) ? '...' : ' ' . $Pointer );
        $Result = ( self::$Format < $NumWords ? $NewWords . $Pointer : self::$Data );
        return $Result;
    }
    
    
    
    /**
     *
     * 
     * FAZ O COMPRIMENTO AUTOMÁTICO EXEMPLO BOM DIA, BOA TARDE E BOA NOITE DE ACORDO COM A HORA DO DIA
     * POR MAYKON SILVEIRA MAYKONSILVEIRA.COM.BR
     * 
     */
    public static function Comprimento(){
        $horaAtual = date('H');
                        
                        if(
                                $horaAtual == 1 
                                || $horaAtual == 2
                                || $horaAtual == 3
                                || $horaAtual == 4
                                || $horaAtual == 5
                                || $horaAtual == 6
                                || $horaAtual == 7
                                || $horaAtual == 8
                                || $horaAtual == 9
                                || $horaAtual == 10
                                || $horaAtual == 11
                                || $horaAtual == 12
                                
                         ):
                             return  $ComprimentoWebtec = '<b>Bom dia </b>';
                        elseif(
                                $horaAtual == 13
                                || $horaAtual == 14
                                || $horaAtual == 15
                                || $horaAtual == 16
                                || $horaAtual == 17
                                || $horaAtual == 18
                                
                                ):
                             return  $ComprimentoWebtec = '<b> Boa tarde </b>';
                         elseif(
                                 $horaAtual == 19
                                 || $horaAtual == 20
                                 || $horaAtual == 21
                                 || $horaAtual == 22
                                 || $horaAtual == 23
                                 || $horaAtual == 24
                                 || $horaAtual == 00
                            
                                 ):
                             return  $ComprimentoWebtec = '<b> Boa noite </b>';
                        endif;
    }
    
    

    // resulme a leitura e evita abrir um novo objeto
    public static function Resultado($resultado){
    
     return (!empty($resultado->getResultado() ? $resultado->getResultado() : null));
    }


        
    /**
     *
     * 
     * CONVERTE O MÊS EM ESCRITA POR MAYKON SILVEIRA MAYKONSILVEIRA.COM.BR
     * 
     */
    public static function Mes($mes){
        $MenoWDois = date($mes); // exempo do mes date('m');
              
              if($MenoWDois == 1):
               return $MenoWDois = "Janeiro";
               elseif($MenoWDois == 2):
               return $MenoWDois = 'Fevereiro';
               elseif($MenoWDois == 3):
               return $MenoWDois = 'Março';
               elseif($MenoWDois == 4):
               return $MenoWDois = 'Abril';
               elseif($MenoWDois == 5):
               return $MenoWDois = 'Maio';
               elseif($MenoWDois == 6):
               return $MenoWDois = 'Junho';
               elseif($MenoWDois == 7):
               return $MenoWDois = 'Julho';
               elseif($MenoWDois == 8):
               return $MenoWDois = 'Agosto';
               elseif($MenoWDois == 9):
               return $MenoWDois = 'Setembro';
               elseif($MenoWDois == 10):
               return $MenoWDois = 'Outubro';
               elseif($MenoWDois == 11):
               return $MenoWDois = 'Novembro';
               elseif($MenoWDois == 12):
               return $MenoWDois = 'Dezembro';
              endif;
    }
  
    
    
    
    

}
