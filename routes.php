<?php
use InfoTech\Controller\{VendedorController, 
                        ClienteController,
                        ProdutoController};/// assim voce consegue importar  
// use InfoTech\Controller\VendedorController;
// use InfoTech\Controller\ProdutoController;
// use InfoTech\Controller\ClienteController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if( isset($_POST))
// $url = str_replace('/infotech', '', $url); ESSE DAQUI FAZ APARECER APENAS O TESTE
echo $url;
// qual foi o 

switch($url)
{
    case'/infotech/':
        echo "Carregar a index.php";
    break;

    case '/infotech/produto':
        // echo "Carregar o Login.php";
        ProdutoController::hello();
    break;
    case '/infotech/cliente':
        // echo "Carregar o Login.php";
        ClienteController::hello();
    break;
    case '/infotech/cliente/listar':
        // echo "Carregar o Login.php";
        ClienteController::hello();
    break;
    case '/infotech/cliente/cadastrar':
        // echo "Carregar o Login.php";
        ClienteController::hello();
    break;

    case '/infotech/vendedor':
        // echo "Carregar o Vendedor.php";
        VendedorController::hello();// :: é um método estático você consegue chamar o método dequela classe sem precisar instanciar a classe 
    break;
}