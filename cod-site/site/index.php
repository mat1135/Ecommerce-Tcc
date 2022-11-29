<?php
  require_once '../classes/Produto.php';
  $produto = new Produto();
  $lista = $produto->boxprod();
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
  <title>Easy Sneakers</title>
  <!-- CSS -->
  <link href="../css/bootstrap.css" rel="stylesheet" /> 
  <link href="../css/alteracoes.css" rel="stylesheet" /> 
</head>

<body>
  <!-- MENU -->
  <?php include_once "menu.php" ?>

  <!-- SLIDESHOW -->
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../images/BANNER OG.png" alt="Primeiro Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/JORDAN 1 HIGH2.png" alt="Segundo Slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../images/JORDAN 1 HIGH (2).png" alt="Terceiro Slide">
        </div>
      </div>
      <!-- Controls -->
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
        </span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
  <!-- FIM SLIDESHOW -->

  <!-- PAGINA -->
  <div class="container espacamento">
    <div class="row ">
      <div class="img-box  col-lg-3">
        <a href="bape.php">
          <img class="img-fluid " width="320px" src="../images/bape.png" alt="Roupas" href="">
        </a>
      </div>
      <div class="img-box  col-lg-3">
        <a href="cactus.php">
          <img class="img-fluid " width="320px" src="../images/cactus.png" alt="Roupas" href="">
        </a>
      </div>
      <div class="img-box col-lg-3">
        <a href="off.php">
          <img class="img-fluid " width="320px" src="../images/offw.png" alt="Roupas" href="">
        </a>
      </div>
            <div class="img-box col-lg-3">
        <a href="supreme.php">
          <img class="img-fluid " width="320px" src="../images/supreme.png" alt="Roupas" href="">
        </a>
      </div>
    </div>
    <div class="heading_container">
      <h2>
          Mais Vendidos
      </h2>
    </div>
    <div class="linha"></div>

    <!-- PRODUTOS -->
    <div class="row">

      <?php
      $limite = 0;
      foreach ($lista as $linha):
        
        if($limite < 8)
        {
          $limite++;
        ?>

        <div class="col-lg-3">
          <div class="box">
            <div class="img-box">
              <a href="pgprod.php?id=<?php echo $linha['id'] ?>">
                <?php echo "<img src='../uploads/".$linha['imagem']."' width='200px'>" ?>
              </a>
            </div>
            <div class="detail-box">
              <h5 class="h5-center">
                <?php echo $linha['nome']; ?>
              </h5>
              <div class="price_box">
                <abbr class="circulor">R$</abbr>
                <span class="price_heading"><?php echo $linha['preco']  ?></span>
              </div>
            </div>
          </div>
      </div>
      <?php } ?>
      <?php endforeach ?>
    </div>
      <div data-mc-src="184bdf4c-e31a-427d-8c28-87ddfa3be7c0#null"></div>       
      <script 
        src="https://cdn2.woxo.tech/a.js#62e01a43c54720a2ab8d0038" 
        async data-usrc>
      </script>
    </div>

  <!-- cadastro rapido -->
  <div class="newsletter5">
      <div class="news">
        <div class="container-custom">
          <div class="row">
            <div class="col-xs-12 col-md-5  news-text">
              <div>
                <p>Cadastre seu e-mail para receber ofertas exclusivas da   
                  <strong>nossa loja</strong>
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

  <!-- RODAPE -->
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