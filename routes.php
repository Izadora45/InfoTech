<?php
use InfoTech\Controller\{VendedorController, 
                        ClienteController,
                        ProdutoController,
                        InicioController};/// assim voce consegue importar  
// use InfoTech\Controller\VendedorController;
// use InfoTech\Controller\ProdutoController;
// use InfoTech\Controller\ClienteController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// if( isset($_POST))
// $url = str_replace('/infotech', '', $url); ESSE DAQUI FAZ APARECER APENAS O TESTE

switch($url)
{
    case'/infotech/':
        InicioController::index();
    break;

    case '/infotech/produto/listar':
        // echo "Carregar o Login.php";
        // ProdutoController::hello();
        ProdutoController::listar();
    break;
    case '/infotech/produto/cadastrar':
        ProdutoController::cadastrar();
    break;

    case '/infotech/cliente/listar':
        // echo "Carregar o Login.php";
        ClienteController::index();
    break;


    case '/infotech/vendedor':
        // echo "Carregar o Vendedor.php";
        VendedorController::hello();// :: é um método estático você consegue chamar o método dequela classe sem precisar instanciar a classe 
    break;
}