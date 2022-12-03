<?php
  require_once '../classes/Cliente.php';
  $cliente = new Cliente();
  $lista = $cliente->listar();
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
    <link rel="stylesheet" href="../css/adm.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
        
        </div>
        <section class="content container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="box">
                        <div class="box-header">
                            <a href="cliente-form.php" class="btn btn-outline-dark">
                                <i class="fa fa-user-plus"></i><span>Novo Cliente</span>
                            </a>
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>CPF</th>                                    
                                    <th class="acao">Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista as $linha): ?>
                                        <tr>
                                            <td><?php echo $linha['id'] ?></a></td>
                                            <td><?php echo $linha['nome'] ?></a></td>
                                            <td><?php echo $linha['telefone'] ?></a></td>
                                            <td><?php echo $linha['cpf'] ?></a></td>
                                            <td>
                                            <a href="#" 
                                                class="btn btn-sm btn-outline-dark">Detalhes</a>              
                                            <a href="cliente-editar.php?id=<?php echo $linha['id'] ?>" 
                                                class="btn btn-sm btn-outline-dark">Editar</a>
                                            <a href="cliente-excluir.php?id=<?php echo $linha['id'] ?>"
                                                class="btn btn-sm btn-danger">Excluir</a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>                          
                                </tbody>
                            </table>

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
