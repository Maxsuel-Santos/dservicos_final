<?php

namespace Ifba\Core;

class Database{
    protected \PDO $conexao;
    protected \PDOStatement $stmt;

    public function __construct(){
        
        $servidor = 'localhost';
        $banco = 'atividades3mat';
        $usuario = 'root';
        $senha = '';
        
        $dsn = "mysql:host={$servidor};dbname={$banco}";
        $this->conexao = new \PDO($dsn,$usuario,$senha);
    }

    public function executaSQL(string $sql, array $dados = []): bool
    {
        $this -> stmt = $this -> conexao -> prepare($sql);
        return $this -> stmt -> execute($dados);
    }

    public function recuperarTodos($classe = \stdClass::class)
    {
        # FetchAll retorna um array com os dados da consulta.
        return $this -> stmt -> fetchAll(\PDO::FETCH_CLASS, $classe);
    }
}