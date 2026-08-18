<?php

namespace InfoTech\Model;
use InfoTech\DAO\ClienteDAO;
class Cliente
{// é aqui que o nome tem que estar exatamente igual ao do banco
    public ?int $id_cliente;
    public string $nome;
    public string $status_cliente;
    public string $endereco;

    public static function getAllRows()
    {


        $objCli = new ClienteDAO();
        return $objCli->select();
        // return new ClienteDAO()->select();
    }
}

?>
