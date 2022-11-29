<?php
require_once '../classes/Vendas.php';

$venda = new Venda();


$venda->tamanho_prod = $_POST['inputTamanhoProd'];

$venda->qnt_prod = $_POST['inputQtnProd'];

$venda->inserir();

?>