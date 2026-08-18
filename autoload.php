<?php
///AO INVES DE VOCÊ FAZER UNS 50 INCLUDS VC SÓ PEGA O 
spl_autoload_register( function($nome_da_classe){// ele tem dentro dele uma outra fanction // VARIÁVEL CONSTANTE E GLOBAL

    $file = BASE_DIR . "/" . $nome_da_classe . ".php"; //

    if(file_exists($file)){
        include $file; // ELE VAI PUXAR O ARQUIVO 
    }else{
        throw new Exception(("Arquivo não encontrado!"));
    }
});