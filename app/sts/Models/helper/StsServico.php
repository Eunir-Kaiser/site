<?php

namespace Sts\Models\helper;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsServico
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class StsServico {

    private $Resultado;

    public function listar() {

        $listar = new \Sts\Models\helper\StsRead();
        $listar->exeRead('sts_servicos', 'LIMIT :limit', 'limit=1');
        $this->Resultado = $listar->getResultado();
        return $this->Resultado;
    }

}
