<?php

namespace Ifba\Model\DAO;

use Ifba\Core\Database;
use Ifba\Model\Entities\Usuario;

class UsuariosDAO
{
    public function inserir($usuario)
    {
        $sql = "INSERT INTO usuarios (nome, email, usuario, senha, lider, turma_id) VALUES (?, ?, ?, ?, ?, ?)";

        $dados = [
            $usuario -> nome,
            $usuario -> email,
            $usuario -> usuario,
            $usuario -> senha,
            $usuario -> lider,
            $usuario -> turma_id
        ];

        $db = new Database();
        return $db -> executaSQL($sql, $dados);
    }

    public function buscarTodos()
    {
        $sql = "SELECT * FROM usuarios";
        $db = new Database();
        $db -> executaSQL($sql);
        # Usuario::class => '\Ifba\Model\Entities\Usuario'
        return $db -> recuperarTodos(Usuario::class);
    }
}