<?php

/**********************************************************************
 * ********************************************************************
 * GERENTE DE TAGS E GOOGLE FACEBOOK E OUTROS MAYKONSILVEIRA.COM.BR E MAYKON SILVEIRA
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
class Google {

    private $File;
    private $Link;
    private $Data;
    private $Tags;

    /* DADOS POVOADOS */
    private $seoTags;
    private $seoData;

    function __construct($File, $Link) {
        $this->File = strip_tags(trim($File));
        $this->Link = strip_tags(trim($Link));
    }

    /**
     * <b>Obter MetaTags:</b> Execute este método informando os valores de navegação para que o mesmo obtenha
     * todas as metas como title, description, og, itemgroup, etc.
     * 
     * <b>Deve ser usada com um ECHO dentro da tag HEAD!</b>
     * @return HTML TAGS =  Retorna todas as tags HEAD
     */
    public function getTags() {
        $this->checkData();
        return $this->seoTags;
    }

    /**
     * <b>Obter Dados:</b> Este será automaticamente povoado com valores de uma tabela single para arquivos
     * como categoria, artigo, etc. Basta usar um extract para obter as variáveis da tabela!
     * 
     * @return ARRAY = Dados da tabela
     */
    public function getData() {
        $this->checkData();
        return $this->seoData;
    }

    /*
     * ***************************************
     * **********  PRIVATE METHODS  **********
     * ***************************************
     */

    //Verifica o resultset povoando os atributos
    private function checkData() {
        if (!$this->seoData):
            $this->getSeo();
        endif;
    }

    //Identifica o arquivo e monta o SEO de acordo
    private function getSeo() {
        $sheep = new Ler;
        
        switch ($this->File):
            

            //SEO:: POST
            /**case 'noticia':
                
                $sheep ->FazLeitura("conteudo", "WHERE id = :link", "link={$this->Link}");
                if (!$sheep ->getResultado()):
                    $this->seoData = null;
                    $this->seoTags = null;
                else:
                    $extract = extract($sheep ->getResultado()[0]);
                    $this->seoData = $sheep ->getResultado()[0];
                    $this->Data = [$titulo . ' - ' . SITENAME, $descricao, HOME . "/noticia/{$url}", HOME . PASTA_IMAGENS ."/{$capa}"];

                    //post:: conta views do post
                    $ArrUpdate = ['visitas' => $visitas + 1];
                    $Update = new Update();
                    $Update->ExeUpdate("conteudo", $ArrUpdate, "WHERE id = :postid", "postid={$id}");
                endif;
                break;**/
                //SEO:: INDEX
            //case 'sheep_painel':
             //   $this->Data = ['Painel de Controle' . ' - '.GOOGLE_DESC, GOOGLE_TAGS, HOME, CAMINHO_TEMAS . SHEEP_IMG_LOGO];
               // break;
            

            //SEO:: INDEX
            case 'index':
                $this->Data = [GOOGLE_TITULO . ' - '.GOOGLE_DESC, GOOGLE_TAGS, HOME, CAMINHO_TEMAS . SHEEP_IMG_LOGO];
                

            //SEO:: 404
            default :
                $this->Data = [SITENAME . ' - 404 Oppsss, Nada encontrado!', SITEDESC, HOME . '/404', CAMINHO_TEMAS  . SHEEP_IMG_LOGO];

        endswitch;

        if ($this->Data):
            $this->setTags();
        endif;
    }

    //Monta e limpa as tags para alimentar as tags
    private function setTags() {
        $this->Tags['Title'] = $this->Data[0];
        $this->Tags['Content'] = Formata::LimitaTextos(html_entity_decode($this->Data[1]), 45);
        $this->Tags['Link'] = $this->Data[2];
        $this->Tags['Image'] = $this->Data[3];

        $this->Tags = array_map('strip_tags', $this->Tags);
        $this->Tags = array_map('trim', $this->Tags);

        $this->Data = null;

        //NORMAL PAGE
        $this->seoTags = '<title>' . $this->Tags['Title'] . '</title> ' . "\n";
        $this->seoTags .= '<meta name="description" content="' . $this->Tags['Content'] . '"/>' . "\n";
        $this->seoTags .= '<meta name="keywords" content="'.GOOGLE_DESC.'" />' . "\n";
        $this->seoTags .= '<meta name="robots" content="index, follow" />' . "\n";
        $this->seoTags .= '<meta name=url content='.HOME.' />' . "\n";
        $this->seoTags .= '<meta name=author content="Webtec Technologies" />' . "\n";
        $this->seoTags .= '<meta name=company content="'.SITENAME.'" />' . "\n";
        $this->seoTags .= '<meta name=revisit-after content="1 week" />' . "\n";
        $this->seoTags .= '<meta name=reply-to content=mailto:'.EMAIL.' />' . "\n";
        $this->seoTags .= '<meta name=copyright content="'.RODAPE.''.date("Y").'" />' . "\n";
        $this->seoTags .= '<meta name=made content=mailto:contato@webtecpr.com.br />' . "\n";
        $this->seoTags .= '<meta name=google-site-verification content='.GOOGLE_VERIFY.' />' . "\n";
        $this->seoTags .= '<link rel="canonical" href="' . $this->Tags['Link'] . '">' . "\n";
        $this->seoTags .= "\n";

        //FACEBOOK
        $this->seoTags .= '<meta property="og:site_name" content="' . SITENAME . '" />' . "\n";
        $this->seoTags .= '<meta property="og:locale" content="pt_BR" />' . "\n";
        $this->seoTags .= '<meta name="viewport" content="width=device-width, initial-scale=1">' . "\n";
        $this->seoTags .= '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n";
        $this->seoTags .= '<meta property="og:title" content="' . $this->Tags['Title'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:description" content="' . $this->Tags['Content'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:image" content="' . $this->Tags['Image'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:image:width" content="600" />' . "\n";
        $this->seoTags .= '<meta property="og:image:height" content="600" />' . "\n";
        $this->seoTags .= '<meta property="og:url" content="' . $this->Tags['Link'] . '" />' . "\n";
        $this->seoTags .= '<meta property="fb:app_id" content="' . $this->Tags['Link'] . '" />' . "\n";
        $this->seoTags .= '<meta property="article:author" content="' . $this->Tags['Link'] . '" />' . "\n";
        $this->seoTags .= '<meta property="article:publisher" content="' . $this->Tags['Link'] . '" />' . "\n";
        $this->seoTags .= '<meta name="author" content="'.SHEEP_IMG.'">' . "\n";
        $this->seoTags .= '<meta property="og:type" content="article" />' . "\n";
        $this->seoTags .= "\n";


        //ITEM GROUP (TWITTER)
        $this->seoTags .= '<meta itemprop="name" content="' . $this->Tags['Title'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="description" content="' . $this->Tags['Content'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="url" content="' . $this->Tags['Link'] . '">' . "\n";

        $this->Tags = null;
    }

}
