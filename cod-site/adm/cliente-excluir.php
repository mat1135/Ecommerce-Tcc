<?php 
require_once '../classes/Cliente.php';

$id = $_GET['id'];
$cliente = new Cliente($id);
$cliente->excluir();

header('Location: cliente-listar.php');
?> 