<?php  

// iniciar seccao
session_start();

// definir constante de controle 
define('CONTROL', true);

// verific se um user existe
$usuario_logado = $_SESSION['usuario'] ?? null;

// verifica rota da URL
if(empty($usuario_logado)){
    $rota = 'login'
} else {
    $rota = $_GET['rota'] ?? 'home';
}

//analisa a rota
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php'
]; 

if(!key_exists($rota, $rotas)){
    die('Acesso negado! ');
}

require_once $rotas[$rota];