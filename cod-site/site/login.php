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


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../css/alteracoes.css" rel="stylesheet" /> 
  <link href="../css/logcad.css" rel="stylesheet" />

</head>


<body>
  <?php include_once "menu.html" ?>
    <!-- end header section -->

  <div class="container">
    <h2 class="h2-logcad">Login de Usuário</h2>
    <div class="logcad-linha"></div>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="images/EASYpng.png" alt="">
            </div>
            <form action="user-login.php" name="form" id="form" method="POST">
                <input type="text" name="nome" id="nome" placeholder="nome de usuario" autofocus>
                <input type="password" name="senha" id="senha" placeholder="digite sua senha">
                <input type="submit" value="entrar">
            </form>
            <p>Ainda não é cadastrado?<a class="hover" href="cadastro.php">Crie agora</a></p>
        </div>
    </section>
  </div>

    <!-- cadastro rapido -->
    <div class="newsletter5">
    <div class="news">
        <div class="container-custom">
            <div class="row">
                <div class="col-xs-12 col-md-5  news-text">
                    <div>
                        <p>
                            Cadastre seu e-mail para receber ofertas 
                        exclusivas da <strong>nossa loja</strong>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 news-form">
                    <form id="form" action="/mvc/store/newsletter/?loja=680475" method="POST">
                        <input type="hidden" name="loja" value="680475">
                        <input type="text" name="name" placeholder="Seu nome">
                        <input name="email" type="email" placeholder="Seu email">
                        <button class="btn  news-button color-detail-bg">Cadastrar</button>
                    </form>
                    <small>Ao clicar em cadastrar, você; estar&aacute; aceitando receber emails promocionais</small>
                </div>
            </div>
        </div>
    </div>
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