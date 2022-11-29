<?php
	require_once '../classes/Cliente.php';
	$id = 3;
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
<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('inputRua').value=("");
            document.getElementById('inputBairro').value=("");
            document.getElementById('inputCidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('inputRua').value=(conteudo.logradouro);
            document.getElementById('inputBairro').value=(conteudo.bairro);
            document.getElementById('inputCidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('inputRua').value="...";
                document.getElementById('inputBairro').value="...";
                document.getElementById('inputCidade').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
  <?php include_once "menu.html" ?>

  <!-- end header section -->

  <div class="container">
    <h2 class="h2-logcad">Cadastro de Usuário</h2>
    <div class="logcad-linha"></div>
    <h3 class="h3-logcad">Dados Pessoais</h3>
    <section class="area-cad">
        <div class="cad">

            <form action="cliente-editar-gravar.php" method="POST" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $cliente->id ?>">

                <p class="p-logcad">Nome</p>
                <input type="text" name="inputNome" id="inputNome" value="<?php echo $cliente->nome ?>">

                <p class="p-logcad">Digite sua data de nascimento:</p>
                <input type="date" name="inputData" id="inputData" value="<?php echo $cliente->datanasc ?>">

                <p class="p-logcad">Digite seu CPF:</p>
                <input type="text" name="inputCpf" id="inputCpf" value="<?php echo $cliente->cpf ?>" maxlength="11"/>

                <p class="p-logcad">Digite seu número de telefone celular:</p>
                <input type="tel" name="inputTelefone" id="inputTelefone" value="<?php echo $cliente->telefone ?>">

                <p class="p-logcad">CEP:</p>
                <input type="text" name="cep" id="cep" maxlength="9" value="<?php echo $cliente->cep ?>" onblur="pesquisacep(this.value);" >

                <p class="p-logcad">Rua:</p>
                <input type="text" name="inputRua" id="inputRua" value="<?php echo $cliente->rua ?>">

                <p class="p-logcad">Numero:</p>
                <input type="text" name="inputNumero" id="inputNumero" value="<?php echo $cliente->numero ?>">

                <p class="p-logcad">Bairro:</p>
                <input type="text" name="inputBairro" id="inputBairro" value="<?php echo $cliente->bairro ?>">

                <p class="p-logcad">Cidade:</p>
                <input type="text" name="inputCidade" id="inputCidade" value="<?php echo $cliente->cidade ?>">

                <p class="p-logcad">Email:</p>
                <input type="email" name="inputEmail" id="inputEmail" value="<?php echo $cliente->email ?>">

                <p class="p-logcad">Senha:</p>
                <input type="password" name="inputSenha" id="inputSenha" value="<?php echo $cliente->senha ?>">

                <input type="submit" value="Cadastrar">
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


</body>

</html>