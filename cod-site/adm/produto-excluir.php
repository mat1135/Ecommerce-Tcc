<?php 
require_once '../classes/Produto.php';

$id = $_GET['id'];
$produto = new Produto($id);
$produto->excluir();

header('Location: produto-listar.php');
?> 