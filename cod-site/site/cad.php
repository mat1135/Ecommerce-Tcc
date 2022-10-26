<?php
    $name=$_POST['name'];
    $date=$_POST['date'];
    $cpf=$_POST['cpf'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];

    $sql= "INSERT INTO cad_usario (nome_use, datanasc_use, cpf_use, celular_use, email_use, senha_use) 
                        VALUES ('$name', $date, '$cpf', '$phone', '$email', '$senha')";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=easysneakers', 'root', '');
    $conexao->exec($sql); 
?>