<?php
session_start();

//Usuários pré-cadastrados
$usuarios = array(
    ['id' => '1',
    'perfil' => 'adm',
    'nome' =>  'Filipe',
    'email' => 'Filipesantos@gmail.com',
    'senha' => '123'],
    ['id' => '2',
    'perfil' => 'user',
    'nome' =>  'Batman',
    'email' => 'Robinrabudo@gmail.com',
    'senha' => '444'],
    ['id' => '3',
    'perfil' => 'user',
    'nome' => 'Yasuo', 
    'email' => 'espadinhas@gmail.com', 
    'senha' => '0']
);

$usuarioAutenticado = false;

//RECEBENDO OS DADOS VIA MÉTODO GET
$emailUsuario = $_GET['email'];
$senhaUsuario = $_GET['senha'];


// AUTENTICANDO O USUÁRIO
for ($idx = 0; $idx < count($usuarios); $idx++) {
    if ($emailUsuario == $usuarios[$idx]['email'] && $senhaUsuario == $usuarios[$idx]['senha']) {
        $usuarioAutenticado = true;
        $_SESSION['id'] = $usuarios[$idx]['id'];
        $_SESSION['perfil'] = $usuarios[$idx]['perfil'];
        $_SESSION['nome'] = $usuarios[$idx]['nome'];
        break;
    } else {
        $usuarioAutenticado = false;
    }
}

  

if($usuarioAutenticado){
    // VALIDANDO A SESSÃO
    $_SESSION['autenticado'] = 'sim';
    header('location: home.php');
} else {
    // VALIDANDO A SESSÃO
    $_SESSION['autenticado'] = 'nao';
    header('location: index.php?login=erro');
}   



?>