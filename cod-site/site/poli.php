<?php
  require_once '../classes/Produto.php';
  $produto = new Produto();
  $lista = $produto->consOff();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="../images/E.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Easy Sneakers</title>


  <link href="../css/bootstrap.css" rel="stylesheet" /> 
  <link href="../css/alteracoes.css" rel="stylesheet" /> 
  <link href="../css/itens.css" rel="stylesheet" /> 
  <style>


  </style>

</head>

<body>


      <!--menu-->
      <?php include_once "menu.php" ?>

      <!-- folha -->
      <div class="espacamento"></div>
      <div class="container">
        <h2>Politica de Privacidade</h2>
        <p>Seus dados pessoais de endereço, pagamento e dados do pedido não serão divulgados em hipótese alguma. Garantimos que seus dados não serão utilizados para outros fins que não o de processamento de pedidos realizados.</p>

        <p>Sobre a segurança do tráfego de dados, toda transação que envolver pagamento, seja por cartão de crédito ou não, estará encriptada com a tecnologia SSL (Secure Socket Layer). Isso significa que só a loja tem acesso a estes dados. Quando você preenche os dados e nos envia, eles são criptografados, o que faz com que durante o trajeto pela Internet fiquem irreconhecíveis, assegurando a confidencialidade.</p>

        <p>Eventualmente podemos receber suas informações de outras fontes, como cadastros de parceiros para somá-las à nossa base de dados que em hipótese alguma será vendida, ou fornecida a terceiros.</p>

        <p>Além disso, armazenamos algumas informações que recebemos automaticamente toda vez que o cliente interage com o site e publicidade da nossa loja online. Internet Protocol (IP), tipo de navegador e páginas visualizadas em nosso site são alguns exemplos desta coleta, que é efetuada por meio de cookies.</p>

        <p>Cookies são identificações da interação com nosso site ou nossas publicidades que são transferidas para o aparelho do cliente visando reconhecê-lo na próxima navegação. Utilizamos cookies para proporcionar uma melhor experiência em nossa loja e viabilizar recursos personalizados, como recomendações de produtos, publicidades e informações adicionais de itens de interesse do cliente.</p>

        <p>Você pode desabilitar o salvamento de cookies em seu browser, deletá-los e gerenciar sua utilização por meio da configuração do navegador que utiliza para acessar a nossa loja online. Para remover Cookies ou Cache do navegador siga os procedimentos indicados pelos desenvolvedores para cada navegador.</p>
    
      </div>
      <!-- footer section -->
      <?php include_once "rodape.html" ?>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>