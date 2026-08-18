<?php

namespace InfoTech\Controller;

class ProdutoController
{
    public string $nome;
    public string $preco;

    
    public static function cadastrar()
    {
        include VIEW . '/Produto/cadastrar_produto.php';
    }

   
    public static function listar()
    {
        include VIEW . '/Produto/listar_produto.php';
    }
}