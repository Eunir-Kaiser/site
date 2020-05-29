<?php
namespace Sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}
/**
 * Description of Artigo
 *
 * @copyright (c) year, Eunir Kaiser Celke
 */
class Artigo {
    public function index() {
        echo "visualizar artigo";
    }
}
