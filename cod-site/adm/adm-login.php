<?php
$adm = $_POST["user"];
$senha = $_POST["password"];

$sql = "SELECT * FROM administrador WHERE user='$adm' and password='$senha'";
$conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
$resultado = $conexao->query($sql);
$logado = $resultado->fetch();
$user_logado = $logado['email'];

if ($logado == null) {
	// Usuário ou senha inválida
	header('Location: adm-erro.php');
} 
else {
	session_start();
	$_SESSION['adm_logado'] = $user_logado;	
    echo "Adm Logado<br> Session_id: ".$_SESSION['adm_logado'];
	header('Location: indexadm.php');
}

die();
?>