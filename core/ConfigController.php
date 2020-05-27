<?php

namespace Core;

/**
 * Description of ConfigController
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ConfigController {

    private $Url;
    private $UrlConjunto;
    private $UrlController;
    private $UrlParametro;

    public function __construct() {

        if (!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
            $this->Url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            
            $this->limpaUrl();
            $this->UrlConjunto = explode("/", $this->Url);

            if (isset($this->UrlConjunto[0])) {
                $this->UrlController = $this->slugController($this->UrlConjunto[0]);
            } else {
                $this->UrlController = CONTROLER;
            }

            if (isset($this->UrlConjunto[1])) {
                $this->UrlParametro = $this->UrlConjunto[1];
            } else {
                $this->UrlParametro = null;
            }
        } else {
            $this->UrlController = CONTROLER;
            $this->UrlParametro = null;
        }
    }

    private function limpaUrl() {
        //eliminar as tags
        $this->Url = strip_tags($this->Url);
        //Eliminar espaços em branco
        $this->Url = trim($this->Url);
        //Eliminar a barra final
        $this->Url = rtrim($this->Url);
    }

    private function slugController($slugController) {
        $UrlController = strtolower($slugController);
        $UrlController = explode("-", $UrlController);
        $UrlController = implode(" ", $UrlController);
        $UrlController = ucwords($UrlController);
        $UrlController = str_replace(" ", "", $UrlController);
        
        return $UrlController;
    }
    
    public function carregar(){
        $classe = "\\Sts\\Controllers\\" . $this->UrlController;
        $classeCarregar = new $classe;
        $classeCarregar->index();
        return $classeCarregar;
    }
}
