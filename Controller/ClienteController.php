<?php

namespace InfoTech\Controller;// name space essa classe eu estou dentro desse pacote que chama infotech 

use InfoTech\Model\Cliente;

// use LojaInfo\Model\Cliente as ModelCliente;

class ClienteController
{
    public string $nome;
    public string $cpf;

    public static function index() // o all vai ser todos os clientes o metodo all vai instanciar aqui a model
    {
        // echo "Olá vindo da class Cliente";
        // $objCli = new Cliente(); /// chama a model
        // $dadosClientes = $objCli->getAllRows();// pega os dados da model e carrega a views
        $dadosClientes = Cliente::getAllRows();
        include VIEW . '/Cliente/listar_clientes.php';
    }
}