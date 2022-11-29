<?php
session_start();
?>

<div class="container menu">
    <header class="margim-top">
      <div class="row">

      <!-- SISTEMA DE LOG-->

        <div class="col-md-3">
          <a href="index.php"><img style="margin-left: 100px; " src="../images/EASYpng.png" alt=""></a>
        </div>

        <?php
        if (!empty($_POST['user_logado'])) {
          echo'<div class="col-md-3 offset-md-4" style="margin-bottom: auto; margin-top: auto;">
          <img src="../images/person-fill.svg" alt="">
            nome de usuario
          <a class="color-detail" href="dadoscli.php" style="text-decoration: none;">minha conta</a> 
          <a class="color-detail" href="cadastro.php" style="text-decoration: none;">meus pedidos</a> 
          <a class="color-detail" href="user-logout.php">sair</a>
          </div>';
        }

        else {
          echo'<div class="col-md-3 offset-md-4" style="margin-bottom: auto; margin-top: auto;">
          <img src="../images/person-fill.svg" alt="">
          Faça seu 
          <a class="color-detail" href="login.php" style="text-decoration: none;">login</a> 
            ou <a class="color-detail" href="cadastro.php" style="text-decoration: none;">cadastre-se</a> 
          </div>';
        }
        ?>

        <!-- DESLOGADO-->

      <!-- CARRINHO DE COMPRAS-->

        <div class="col carrinho">
          <img src="../images/cart2.svg" width="30px" alt="carrinho">
          <span data-cart="amount" class="qtd-itens">0</span>
          <span class="valor-itens">
            <abbr>R$</abbr>
            <span data-cart="price">0,00</span>
          </span>
        </div>
      </div>
    </header>
    <div class="row">
    <div class="offset-md-2">

    <!-- MENU -->

    <header class="header_section long_section px-0">
      <nav class="navbar-expand-lg custom_nav-container ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <ul class="nav-item">
                <a class="nav-link" href="snkrs.php">Sneakers</a>
              </ul>
              <li class="nav-item">
                <a class="nav-link" href="acessorios.php">Acessorios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="roupas.php">Roupas</a>
              </li>
              <li class="nav-item nav-link">
                <div class="search-box">
                  <input type="text" class="search-txt" placeholder="Pesquisar">
                  <a href="" class="search-btn"><img src="../images/search.svg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
          </div>
        </div>
      </nav>
    </header>
  </div>
  </div>
  </div>