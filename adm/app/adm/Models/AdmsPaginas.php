<?php

namespace App\adm\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AdmsPaginas
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class AdmsPaginas {

    private $Resultado;
    private $UrlController;

    public function listarPaginas($UrlController = null) {
        //echo "Listar paginas";
        $this->UrlController = (string) $UrlController;
        $listar = new \Sts\Models\helper\StsRead();
        $listar->fullRead("SELECT "
                . "pg.id"
                . "FROM "
                . "adms_paginas pg "
                . "WHERE"
                . " pg.controller =:controller", 
                "controller={$this->UrlController}"
                . "&metodo={$this->UrlMetodo}");

        $this->Resultado = $listar->getResultado();
        //var_dump($this->Resultado);
        return $this->Resultado;
    }

}
