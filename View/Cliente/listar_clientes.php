<?php


echo '<h1>Página de Listar Clientes</h1>';


foreach($dadosClientes as $cliente){
    echo $cliente->nome;
    echo '<br>';
}
// tabelas em html para fazer um for e listar os clientes
?>