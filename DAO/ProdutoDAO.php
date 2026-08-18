<?php


namespace InfoTech\DAO;

class ProdutoDAO extends DAO  /// O CONSTRUTOR DESSA CLASSE HERDA TIPO DTO NO JAVA SE MUDAR O BANCO NAO MUDA NADA ISSO PORQUE VOCE PODE USAR 
{
    public function __construct()
    {
        parent::__construct();/// parent ele está falando isso daqui é uma função que está vindo lá no pai e no pai fala para construir essa 
        // essa classe herda dela porém ela tem que inicializar os inits da superclass para poder começar essa daí, lembra da quele conteúdo que ele passou sobre a herança um funcionário hedar os atributos da tabela 
    }
}