
<?php
//conexao
include_once 'php_action/db_connect.php';
//Header
include_once 'inc/header.php';
?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Minha empresa</a>

  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="clientes.php">
              <span data-feather="file"></span>
              clientes<span class="sr-only">(atual)</span>
            </a>

          </ul>
        </div>
      </nav>
      



      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>

        </div>

        <?php

        $sql="SELECT * FROM cliente";

        $resultado=mysqli_query($connect, $sql);


        $qtd_clientes=mysqli_num_rows($resultado);
        
        echo "<h3>Total de Clientes: ". $qtd_clientes."</h3>";
        ?>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


      </main>
    </div>
  </div>

  <?php
//Footer
  include_once 'inc/footer.php';
  ?>