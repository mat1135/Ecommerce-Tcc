<?php
  require_once '../classes/Produto.php';
  $produto = new Produto();
  $lista = $produto->consTenis();
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
      <div class="container">
        <div class="row" style="margin-top: 20px;">
          <div class="filtro col-2">
            <p>FILTRAR</p>

          </div>
          <div class="barra col-10">
            <p>TENIS</p>
          </div>
        </div>
        <div class="row">
        <?php foreach ($lista as $linha): ?>
        <div class="col-lg-3">
          <div class="box">
            <div class="img-box">

              <a href="pgprod.php?id=<?php echo $linha['id'] ?>" class="pg"><?php echo "<img src='../uploads/".$linha['imagem']."' width='200px'>" ?></a>

             

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

      <?php endforeach ?>
      </div>
    
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