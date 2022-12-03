<?php
  require_once '../classes/Produto.php';
  $id = $_GET['id'];
  $produto = new Produto($id);
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

  <style>
    input{
      border: none;
    }

    strong{
      font-size: 35px;
      margin-left: 5px;
    }
  </style>

</head>

<body>

  <!--menu-->
  
  <?php include_once "menu.php" ?>

  <!--  PAGINA  -->
  <div class="espacamento"></div>
  <div class="container">
    <article class="row produtos-compra">
      <figure class="col-md-7"> 
        <?php echo "<img src='../uploads/".$produto->imagem."' class='img-fluid'>" ?>
      </figure>
      <form action="vendas-gravar.php" method="POST" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
      <section class="form-group">
        <article class="produtos-conteudo"> 
          <h1>
          <input type="text" name="inputNomeProd" id="inputNomeProd" value="<?php echo $produto->nome ?>" readonly>  
          </h1>      
          <span class="pprod">
            Marca:
          </span>
          <input name="inputMarcaProd" id="inputMarcaProd" value="<?php echo $produto->marca ?>" readonly>
          <br>
          <span class="pprod">
            Tipo:
          </span>
          <input name="inputTipoProd" id="inputTipoProd" value="<?php echo $produto->tipo ?>" readonly>
          <br>
          <label for="inputTamanhoProd" class="pprod control-label">Tamanhos:</label>
            <div class="form-group">
              <select class="form-control col-sm-5" name="inputTamanhoProd" id="inputTamanhoProd">
                <option value="39">39</option>
                <option value="40">40</option>
                <option value="41">41</option>
                <option value="42">42</option>
              </select>
            </div>    
            
          <label for="inputQtnProd" class="pprod control-label">Quantidade:</label>
            <div class="form-group">
              <select class="form-control col-sm-5" name="inputQtnProd" id="inputQtnProd">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
              </select>
            </div> 
            <strong>
              <span  style="font-size:15px; background-color: #ddd; padding: 5px; border-radius: 100px;">R$</span><?php echo $produto->preco ?>
              <span class="d-block" style="font-size: 16px;">em até 12x no cartão</span>
            </strong>
            <button onclick="compraFinalizada" type="submit" class="btn btn-success col-md-12">Comprar</button>
        </article>
      </section>
      </form>
    </article>
  </div>  
  <div class="container">
  <div class="linha"></div>
  <div class="espacamento"></div>
    <span class="pprod" style="font-size: 30px; padding: 20px;">Descrição:</span>
    <br>
    <span style="font-size: 18px; padding: 30px;"><?php echo $produto->descricao?><span>
    <div class="espacamento"></div>
  </div>
  <div class="container">
  <div class="linha"></div>
    <h2 style="font-size: 30px; padding: 20px;">Produtos Similares:</h2>
    <div class="row">

    <?php
      require_once '../classes/Produto.php';
      $produto = new Produto();
      $lista = $produto->boxprod();

    $limite = 0;
    foreach ($lista as $linha):
      
      if($limite < 4)
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
  </div>


  <!-- footer section -->
  <?php include_once "rodape.html" ?>

  <!-- JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
        function compraFinalizada() {
            Swal.fire({
                icon: 'success',
                title: 'Compra realizada com sucesso!',
                showConfirmButton: false,
                timer: 10000
            })
        }
    </script>
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