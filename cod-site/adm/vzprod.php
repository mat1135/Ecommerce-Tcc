<?php
	require_once '../classes/Vendas.php';
	$id = $_GET['id'];
  	$venda = new Venda($id);
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
      <a class="nav-link px-3" href="adm-logout.php">Sair</a>
    </div>
  </div>
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
                                        <form id="form1" name="form1" class="form-horizontal" action="cliente-editar-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="id" value="<?php echo $venda->id ?>">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Nome do Produto:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" value="<?php echo $venda->nome_prod ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Marca:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" value="<?php echo $venda->marca_prod ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tamanho:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" value="<?php echo $venda->tamanho_prod ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Tipo do Produto:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" value="<?php echo $venda->tipo_prod ?>" readonly/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Quantidade:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" value="<?php echo $venda->qnt_prod ?>" readonly/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fim da primeira linha -->

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="box-footer">
                                                        <label for="groupButton"></label>
                                                        <div class="col-md-6 col-sm-offset-2 pull-left">
                                                        <a href="pedidos.php" class="btn btn-sm btn-outline-dark">Voltar</a>  
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