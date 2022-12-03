<?php
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM clientes WHERE email='$email' and senha='$senha'";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
$resultado = $conexao->query($sql);
$logado = $resultado->fetch();
$user_logado = $logado['nome'];

if ($logado == null) {
	// Usuário ou senha inválida
	$_SESSION['erro'] = true;
	header('Location: user-erro.php');
} 
else {
	session_start();
	$_SESSION['user_logado'] = $user_logado;	
	header('Location: index.php');
}

die();

?>