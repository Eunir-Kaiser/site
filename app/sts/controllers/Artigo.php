<?php

namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of Artigo
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Artigo {

    private $Dados;
    private $Artigo;

    public function index($Artigo = null) {
        $this->Artigo = (string)$Artigo;
        //echo "<br><br><br>{$this->Artigo}";
        
        $visualizarArt = new \Sts\Models\StsArtigo();
        $this->Dados['sts_artigos'] = $visualizarArt->visualizarArtigo($this->Artigo);
        
                $carregarView = new \Core\ConfigView('sts/Views/blog/artigo', $this->Dados);
              //var_dump($this->Dados);
        $carregarView->renderizar();
    }

}
