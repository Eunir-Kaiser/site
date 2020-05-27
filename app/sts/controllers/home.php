<?php

namespace Sts\Controllers;
if (!defined('URL')){
    header("Location: /");
    exit();
}
/**
 * Description of home
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class home {
    public function index(){
        //echo "Página HOME ,<br>";
        $carregarView = new \Core\ConfigView("sts/Views/home/home");
        $carregarView->renderizar();
    }
}
