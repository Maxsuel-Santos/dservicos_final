<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;
use Ifba\Core\Database;
use Ifba\Model\DAO\UsuariosDAO;
use Ifba\Model\Entities\Usuario;

class HomeController extends Controller{

    public function index(){
<<<<<<< HEAD
        /*$dados = [
            'titulo' => 'D+ Serviços',
            'data' => date('d/m/Y h:i:s')
        ];*/

    $this -> view('inicial'/*,$dados*/);
    }

    public function eletricista() {
        $this -> view('eletricista');
    }

    public function pedidofeito() {
        $this -> view('pedidofeito');
    }

    public function cadastrofeito() {
        $this -> view('cadastrofeito');
    }

    public function cadastropessoal() {
        $this -> view('cadastropessoal');
    }
    
    public function cadastroprofissional() {
        $this -> view('cadastroprofissional');
    }

    /*public function criarconta()
=======
        $dados = [
            'titulo' => 'D+ Serviços',
            'data' => date('d/m/Y h:i:s')
        ];

        $this -> view('inicial', $dados);
    }

    public function login()
    {
        $this -> view('login');
    }

    public function criarconta()
>>>>>>> 4af33f51c680f390a208124014aacfabae9bde15
    {
        $usuario = new Usuario;
        $usuario -> nome = "José";
        $usuario -> email = "jose@ifba.edu.br";
        $usuario -> usuario = "jose";
        $usuario -> senha = "123456";
        $usuario -> lider = False;
        $usuario -> turma_id = 1;

        $dao = new UsuariosDAO;
        if($dao -> inserir($usuario)){
            echo "Usuário inserido com sucesso";
        }else{
            echo "Erro ao Inserir o usuário";
        }

        $this -> view('conta');
<<<<<<< HEAD
    }*/

    /*public function listarUsuarios()
=======
    }

    public function listarUsuarios()
>>>>>>> 4af33f51c680f390a208124014aacfabae9bde15
    {
        $dao = new UsuariosDAO;
        $usuarios = $dao -> buscarTodos();
        
        foreach($usuarios as $usuario)
        {
            echo $usuario -> id . " - " . $usuario -> nome . "<hr>";
        }
<<<<<<< HEAD
    }*/
=======
    }
>>>>>>> 4af33f51c680f390a208124014aacfabae9bde15
}