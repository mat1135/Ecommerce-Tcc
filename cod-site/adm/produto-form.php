<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="../images/E.png" type="image/gif" />
    <title>EASY SNKRS/ADM</title>

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
        <h1 class="h2">Gerenciar Produtos</h1>
        
        </div>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="box">

                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pessoais" data-toggle="tab">Dados do Produto</a></li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane active" id="pessoais">
                                    <div class="post"><br>
                                        <form id="Produto" name="Produto" class="form-horizontal" action="produto-gravar.php" method="post" onsubmit="return checkCheckBox(this)" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="hidden" name="inputId" value="">
                                                    <div class="form-group">
                                                        <label for="inputNome" class="col-md-2 control-label">Nome:</label>
                                                        <div class="col-sm-5">
                                                            <input type="text" class="form-control" name="inputNome" id="inputNome" >
                                                        </div>
                                                        <label for="inputMarca" class="col-md-1 control-label">Marca:</label>
                                                        <div class="col-sm-4">
                                                            <select name="inputMarca" id="inputMarca">
                                                                <option value="nike">nike</option>
                                                                <option value="adidas">adidas</option>
                                                                <option value="bape">bape</option>
                                                                <option value="supreme">supreme</option>
                                                                <option value="cactus">cactus</option>
                                                                <option value="off">off</option>
                                                                <option value="outras">outras</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputPeso" class="col-md-2 control-label">Peso em G:</label>
                                                        <div class="col-sm-5">
                                                            <input type="number" class="form-control" name="inputPeso" id="inputPeso" >
                                                        </div>
                                                        <label for="inputTipo" class="col-md-1 control-label">Tipo:</label>
                                                        <div class="col-sm-4">
                                                            <select name="inputTipo" id="inputTipo">
                                                                <option value="tenis">TENIS</option>
                                                                <option value="roupas">ROUPAS</option>
                                                                <option value="acessorios">ACESSORIOS</option>
                                                            </select>
                                                        </div>
                                                    </div>                                  
                                                    <div class="form-group">
                                                        <label for="inputPreco" class="col-md-2 control-label">Preço:</label>
                                                        <div class="col-sm-5">
                                                            <input type="number" class="form-control" name="inputPreco" id="inputPreco" >
                                                        </div>                                               
                                                        <label for="inputDescricao" class="col-md-3 control-label">Descrição do produto:</label>
                                                        <div class="col-sm-2">
                                                          <textarea name="inputDescricao" id="inputDescricao" cols="50" rows="3" ></textarea>
                                                        </div>
                                                        <div class="col-xs-12">
                                                          
                                                    <input type="hidden" name="inputId" value="">

                                                    <div class="form-group">
                                                    <label for="inputImagem" class="col-md-2 control-label">Imagem:</label>
                                                        <div class="col-sm-9">
                                                            <input class="" type="file" name="arquivo" id="arquivo" value="Alterar foto" /></label>
                                                        </div>
                                                    </div>

                                                </div>
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
                                                            <button type="submit" id="groupButton" class="btn btn-primary " name="salvar" title="Salvar as alterações">
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
