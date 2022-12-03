<?php
	require_once '../classes/Cliente.php';
	$id = 6;
  $cliente = new Cliente($id);
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
  <link rel="icon" href="images/E.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Easy Sneakers</title>


  <link href="../css/bootstrap.css" rel="stylesheet" /> 
  <link href="../css/alteracoes.css" rel="stylesheet" /> 
  <link rel="stylesheet" href="../css/logcad.css">

</head>

<body>
  <?php include_once "menu.php" ?>

  <!-- end header section -->

  <div class="container">
    <h2 class="h2-logcad">Dados do Usuário</h2>
    <div class="logcad-linha"></div>
    <h3 class="h3-logcad">Dados Pessoais</h3>
    <section class="area-cad">
        <div class="cad">

            <form action="cliente-gravar.php" method="POST" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $cliente->id ?>">

                <p class="p-logcad">Nome</p>
                <p class="fundodad"><?php echo $cliente->nome ?></p>

                <p class="p-logcad">Data de nascimento</p>
                <p class="fundodad"><?php echo $cliente->datanasc ?></p>

                <p class="p-logcad">CPF</p>
                <p class="fundodad"><?php echo $cliente->cep ?></p>

                <p class="p-logcad">Celular</p>
                <p class="fundodad"><?php echo $cliente->telefone ?></p>

                <p class="p-logcad">CEP</p>
                <p class="fundodad"><?php echo $cliente->cep ?></p>

                <p class="p-logcad">Rua</p>
                <p class="fundodad"><?php echo $cliente->rua ?></p>

                <p class="p-logcad">Numero</p>
                <span class="fundodad"><?php echo $cliente->numero ?></span>

                <p class="p-logcad">Bairro</p>
                <p class="fundodad"><?php echo $cliente->bairro ?></p>

                <p class="p-logcad">Cidade</p>
                <p class="fundodad"><?php echo $cliente->cidade ?></p>

                <br>
                <a href="dadoscli-editar.php"><button type="button" class="btn btn-sm btn-outline-dark">EDITAR DADOS</button></a>
            </form>
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

  <!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
  })
</script>


</body>

</html>