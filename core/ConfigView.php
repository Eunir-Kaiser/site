<?php
namespace Core;
/**
 * Description of ConfigView
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class ConfigView {
    
    private $Nome;
    private $Dados;
    
    public function __construct($Nome, array $Dados = null) {
        $this->Nome = (string) $Nome;
        $this->Dados = $Dados;
        //echo "Carregar a View";
    }
    
    public function renderizar(){
        include 'app/' .$this->Nome.'.php';
    }
        
    
}
