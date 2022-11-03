<?php
  require_once '../classes/Produto.php';
  $produto = new Produto();
  $detalhe = $produto->detalhes();
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


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="../css/alteracoes.css" rel="stylesheet" /> 

</head>

<body>

  <!--menu-->
  <?php include_once "menu.html" ?>

  <!--colocar dentro disso-->
  <div class="container">
  <article class="row produtos-compra">
  <figure class="col-md-7"> 
    <?php echo "<img src='../uploads/".$detalhe['imagem']."' width='200px'>" ?>
  </figure>
  <section class="col-md-5 mb-3 d-flex flex-column justify-content-around">
  <article class="produtos-conteudo"> 
  <h1>
    <?php echo $detalhe['nome']?>
  </h1>
  <p class="pprod">
    marca:
  </p>
  <p class="pprod">
    tipo: 
  </p>
  </article>
  <article class="produtos-preco">
  <strong> 
    R$ <?php echo $detalhe['preco']?>
    <span class="d-block">
      Em até 12x sem juros
  </span>
  </strong>
  <form action="#">
  <div class="form-group">
                <label for="produtos-quantidade-itens">Quantidade</label>
                <select class="form-control" id="produtos-quantidade-itens">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <button type="submit" class="btn btn-success col-md-12">Comprar</button>
  </form>
  </article>
  </section>
  </article>
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