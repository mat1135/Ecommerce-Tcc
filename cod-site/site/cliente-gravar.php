<?php
require_once '../classes/Cliente.php';

$cliente = new Cliente();

$cliente->nome = $_POST['inputNome'];
$cliente->telefone = $_POST['inputTelefone'];
$cliente->cpf = $_POST['inputCpf'];
$cliente->datanasc = $_POST['inputData'];
$cliente->email = $_POST['inputEmail'];
$cliente->senha = $_POST['inputSenha'];
$cliente->cep = $_POST['cep'];
$cliente->rua = $_POST['inputRua'];
$cliente->numero = $_POST['inputNumero'];
$cliente->bairro = $_POST['inputBairro'];
$cliente->cidade = $_POST['inputCidade'];

$cliente->inserir();
header('Location: index.php');

?>