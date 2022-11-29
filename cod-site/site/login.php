<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/E.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Easy Sneakers</title>


  <link href="../css/bootstrap.css" rel="stylesheet" /> 
  <link href="../css/alteracoes.css" rel="stylesheet" /> 
  <link href="../css/logcad.css" rel="stylesheet" />

</head>


<body>
  <?php include_once "menu.php" ?>
    <!-- end header section -->

  <div class="container">
    <h2 class="h2-logcad">Login de Usuário</h2>
    <div class="logcad-linha"></div>
    <section class="area-login">
        <div class="login">
          <?php
            if(isset($_SESSION['erro'])){
            echo'<div class="alert alert-danger">
            <p>ERRO: email ou senha incorretos.</p>
            </div>';
          }
            unset($_SESSION['erro']);
            ?>

            <div>
                <img src="../images/EASYpng.png" alt="">
            </div>
            <form action="user-login.php" name="form" id="form" method="POST">
                <input type="email" name="email" id="email" placeholder="digite seu email" autofocus>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha">
                <input type="submit" value="entrar">
            </form>
            <p>Ainda não é cadastrado?<a class="hover" href="cadastro.php">Crie agora</a></p>
        </div>
    </section>
  </div>


  <?php include_once "rodape.html" ?>
  <!-- footer section -->

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