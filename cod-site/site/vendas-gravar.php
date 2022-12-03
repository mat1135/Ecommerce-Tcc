<?php
require_once '../classes/Vendas.php';

$venda = new Venda();

$venda->nome_prod = $_POST['inputNomeProd'];
$venda->tamanho_prod = $_POST['inputTamanhoProd'];
$venda->marca_prod = $_POST['inputMarcaProd'];
$venda->tipo_prod = $_POST['inputTipoProd'];
$venda->qnt_prod = $_POST['inputQtnProd'];

$venda->inserir();
header('location: index.php')
?>