<?php
namespace InfoTech\Controller;

class InicioController
{
    public static function index() // o static vai chamar esse método index sem precisar instanciar a classe 
    {
        include VIEW . '/Inicial/index.php';
    }
}
?>