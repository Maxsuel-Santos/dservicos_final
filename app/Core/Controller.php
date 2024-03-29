<?php

namespace Ifba\Core;

abstract class Controller{

    # Uma classe abstrata é uma classe que não pode ser instanciada, somente herdada. É uma classe que pode ter implementação e também os contratos a serem seguidos pelas classes filhas.

    protected string $pasta_view = './app/View/';

    public function view(string $arquivo, array $dados = [])
    {
        extract($dados);
        # Função extract cria variáveis a partir de um arra associativo em que as chaves do array tornam-se o nome das variáveis.

        $caminho = $this -> pasta_view . "{$arquivo}.view.php";
        if(file_exists($caminho)){
            require $caminho;
        }else{
            echo "<h2>Arquivo de View Não Existe</h2>";
        }
    }
}