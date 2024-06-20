<?php


class Sessoes {

    private $Data;
    private $Cache;
   

    function __construct($Cache = null) {
        session_start();
        $this->Sessao($Cache);
    }

    //Verifica e executa todos os métodos da classe!
    private function Sessao($Cache = null) {
        $this->Data = date('Y-m-d');
        $this->Cache = ( (int) $Cache ? $Cache : 20 );

        if ($_SESSION['sheep_user']):
            $this->sessionUpdate();
        endif;

        $this->Data = null;
    }


     

    //Atualiza sessão do usuário!
    private function sessionUpdate() {
        $_SESSION['sheep_user']['online_endview'] = date('Y-m-d H:i:s', strtotime("+{$this->Cache}minutes"));
        $_SESSION['sheep_user']['online_url'] = $_SERVER['REQUEST_URI'];
    }

    
   
       //Verifica, cria e atualiza o cookie do usuário 
       private function getCookie() {
        $Cookie = filter_input(INPUT_COOKIE, 'sheep_user', FILTER_DEFAULT);
        setcookie("sheep_user", base64_encode("sheepPHP"), time() + 86400);
        if (!$Cookie):
            return false;
        else:
            return true;
        endif;
    }

    



    

}

