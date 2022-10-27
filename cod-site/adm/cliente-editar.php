<?php
	require_once 'classes/Cliente.php';
	$id = $_GET['id'];
  	$cliente = new Cliente($id);
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>EASY SNKRS/ADM</title>
    <link rel="icon" href="../images/E.png" type="image/gif" />
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/adm.css">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">EASY sneakers</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Pesquisar" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="tllog.html">Sair</a>
    </div>
  </div>
  <!-- Adicionando Javascript -->
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
</header>
<div class="container-fluid">
  <div class="row">
    <!-- Main NAV -->
    <?php include_once "main-nav.html" ?>

  <div class="content-wrapper">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Gerenciar Cliente</h1>
        
        </div>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="box">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pessoais" data-toggle="tab">Dados do Cliente</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="form1" name="form1" class="form-horizontal" action="../adm/cliente-editar-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="<?php echo $cliente->id ?>">

                                                    <div class="form-group">
                                                        <label for="inputNome" class="col-md-2 control-label">Nome:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputNome" id="inputNome" value="<?php echo $cliente->cidade ?>" />
                                                        </div>
                                                        <label for="inputData" class="col-md-1 control-label">Data de nascimento:</label>
                                                        <div class="col-sm-4">
                                                            <input type="date" class="form-control" name="inputData" id="inputData" value="<?php echo $cliente->cidade ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputTelefone" class="col-md-2 control-label">Telefone:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="inputTelefone" id="inputTelefone" data-inputmask="'mask': ['(99) 99999-9999']" data-mask="" inputmode="text" value="<?php echo $cliente->telefone ?>"/>
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputCpf" class="col-md-2 control-label">CPF:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="inputCpf" id="inputCpf" maxlength="11" value="<?php echo $cliente->cpf ?>"/>
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputEmail" class="col-md-2 control-label">Email:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputEmail" id="inputEmail" value="<?php echo $cliente->email ?>"/>
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputSenha" class="col-md-2 control-label">Senha:</label>
                                                        <div class="col-sm-3">
                                                            <input type="password" class="form-control" name="inputSenha" id="inputSenha" value="<?php echo $cliente->senha ?>" />
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cep" class="col-md-2 control-label">Cep:</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" name="cep" id="cep"maxlength="9" onblur="pesquisacep(this.value);" value="<?php echo $cliente->cep ?>" />
                                                        </div>                                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputRua" class="col-md-2 control-label">Rua:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputRua" id="inputRua" value="<?php echo $cliente->rua ?>" />
                                                        </div>
                                                        <label for="inputNumero" class="col-md-1 control-label">Numero:</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" name="inputNumero" id="inputNumero" value="<?php echo $cliente->numero ?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputBairro" class="col-md-2 control-label">Bairro:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="inputBairro" id="inputBairro" value="<?php echo $cliente->bairro ?>"/>
                                                        </div>
                                                        <label for="inputCidade" class="col-md-1 control-label">Cidade:</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" name="inputCidade" id="inputCidade" value="<?php echo $cliente->cidade ?>"/>
                                                        </div>
                                                    </div>                          
                                                </div>
                                            </div>
                                            <!-- Fim da primeira linha -->

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="box-footer">
                                                        <label for="groupButton"></label>
                                                        <div class="col-sm-3 col-sm-offset-2 pull-left">
                                                            <button type="submit" id="groupButton" class="btn btn-primary " title="Salvar as alterações">
                                                                <i class="fa fa-save"></i> Salvar dados
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Fim da div tab content -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Coluna assistente -->
                <div class="col-xs-12 col-sm-4">
                  <div class="box box-default dicas">
                    <div class="box-body box-profile">
                      <div class="direct-chat-msg">
                        <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-left">Área de informações</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Coluna assistente -->
            </div> <!-- fim row -->
        </section>
      </div>
    </main>
  </div>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>