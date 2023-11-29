<?php
declare(strict_types=1);

use Ifba\Controller\HomeController;
use Ifba\Core\Router;

require_once "./vendor/autoload.php";
require_once "./app/config.php";

const URL_BASE = "http://localhost/dservicos_final";
const NS_CONTROLLERS = "\\Ifba\\Controllers\\";

function css(string $arquivo): string
{
    return URL_BASE . "/public/css/{$arquivo}.css";
}

function linkUrl(string $rota = ""): string
{
    return URL_BASE . "/" . $rota;
}

$url = $_GET['url'] ?? '/';

Router::add('/', 'HomeController', 'index');
Router::add('login', 'LoginController', 'login');
Router::add('eletricista', 'HomeController', 'eletricista');
//Router::add('criarconta', 'HomeController', 'criarconta');
//Router::add('listar', 'HomeController', 'listarUsuarios');
Router::add('cadastropessoal', 'HomeController', 'cadastropessoal');
Router::add('cadastroprofissional', 'HomeController', 'cadastroprofissional');
Router::add('pedidofeito', 'HomeController', 'pedidofeito');
Router::add('cadastrofeito', 'HomeController', 'cadastrofeito');
Router::add('__erro', 'ErroController', 'erro404');

Router::execute($url);
