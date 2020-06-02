<?php
namespace Sts\Models\helper;
if (!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Description of StsArtRecente
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class StsArtRecente {
    private $Resultado;
    
    Public function listarArtRecente() {
        $listar = new \Sts\Models\helper\StsRead();
        $listar->fullRead('SELECT id, titulo, descricao, slug FROM sts_artigos WHERE adms_sit_id =:adms_sit_id ORDER BY id DESC LIMIT :limit', "adms_sit_id=1&limit=7");
        $this->Resultado = $listar->getResultado();
        
    }
}
