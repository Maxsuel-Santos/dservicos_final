<?php

namespace Ifba\Model\Entities;

class Usuario
{
    public int $id;
    public string $nome;
    public string $email;
    public string $usuario;
    public string $senha;
    public bool $lider;
    public int $turma_id;
}