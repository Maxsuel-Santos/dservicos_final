<?php

namespace Ifba\Controller;

use Ifba\Core\Controller;
use Ifba\Core\Database;
use Ifba\Model\DAO\UsuariosDAO;
use Ifba\Model\Entities\Usuario;

class LoginController extends Controller{

    public function login()
    {
        $this -> view('login');
    }

}