<?php

namespace Sts\Models\helper;

use PDO;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of StsRead
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class StsRead extends StsConn {

    private $Select;
    private $Values;
    private $Resultado;
    private $Query;
    private $Conn;

    function getResultado() {
        return $this->Resultado;
    }

    //Listar todos
    public function exeRead($Tabela, $Termos = null, $ParseString = null) {
        if (!empty($ParseString)) {
            parse_str($ParseString, $this->Values);
        }
        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        echo "{$this->Select}";
        $this->exeInstrucao();
    }

    //Listar parcial
    public function fullRead($Query, $ParseString = null) {
        $this->Select = (string) $Query;
        if (!empty($ParseString)){
            parse_str($ParseString, $this->Values);
        }
        $this->exeInstrucao();
        
    }


    private function exeInstrucao() {
        $this->conexao();
        try {
            $this->getInstrucao();
            $this->Query->execute();
            $this->Resultado = $this->Query->fetchALL();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        } finally {
            
        }
    }

    private function conexao() {
        $this->Conn = parent::getConn();
        $this->Query = $this->Conn->prepare($this->Select);
        $this->Query->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getInstrucao() {
        if ($this->Values) {
            foreach ($this->Values as $Link => $Valor) {
                if ($Link == 'limit' || $Link == 'offset') {
                    $Valor = (int) $Valor;
                }
                $this->Query->bindValue(":{$Link}", $Valor, (is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }

}
