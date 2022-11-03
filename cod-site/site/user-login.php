<?php
$nome = $_POST["nome"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM clientes WHERE nome='$nome' and senha='$senha'";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
$resultado = $conexao->query($sql);
$logado = $resultado->fetch();
$user_logado = $logado['email'];

if ($logado == null) {
	// Usuário ou senha inválida
	header('Location: user-erro.php');
} 
else {
	session_start();
	$_SESSION['user_logado'] = $user_logado;	
    echo "User Logado<br> Session_id: ".$_SESSION['user_logado'];
	header('Location: index.php');
}

die();
?>