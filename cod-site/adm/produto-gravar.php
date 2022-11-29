<?php
require_once '../classes/Produto.php';

$produto = new Produto();

$produto->nome = $_POST['inputNome'];
$produto->marca = $_POST['inputMarca'];
$produto->peso = $_POST['inputPeso'];
$produto->tipo = $_POST['inputTipo'];
$produto->descricao = $_POST['inputDescricao'];
$produto->descricao = $_POST['inputTam39'];
$produto->descricao = $_POST['inputTam40'];
$produto->descricao = $_POST['inputTam41'];
$produto->descricao = $_POST['inputTam42'];
$produto->descricao = $_POST['inputTamP'];
$produto->descricao = $_POST['inputTamM'];
$produto->descricao = $_POST['inputTamG'];
$produto->tam = $_POST['inputTamGG'];
$produto->preco = $_POST['inputPreco'];

if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0){
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nomeImagem = $_FILES['arquivo']['name'];
    $extensao = strrchr($nomeImagem, '.');
    $extensao = strtolower($extensao);
    if(strstr('.jpg;.jpeg;.gif;.png', $extensao)){
        $novoNome = md5(microtime()) .$extensao; ;
        $destino = '../uploads/' . $novoNome; 
        @move_uploaded_file($arquivo_tmp, $destino);
        $produto->imagem = $novoNome;
    }
}

$produto->inserir();
header('Location: produto-listar.php');
?>
