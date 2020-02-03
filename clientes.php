
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
      <a class="nav-link" href="index.php">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="file"></span>
              clientes<span class="sr-only">(atual)</span>
            </a>
            
          </ul>
        </div>
      </nav>
      
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Clientes</h1>
          
        </div>

      </br>
      <a href="cadastrar.php">cadastrar +</a>
    </br>

    <div class="container d-inline">

      <table class="table table-border">

        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">nome</th>
            <th scope="col">email</th>
            <th scope="col">endereco</th>
            <th scope="col">cpf</th>
          </tr> 

          
        </thead>
        <tbody>
          <?php

          $sql="SELECT * FROM cliente";

          $resultado=mysqli_query($connect, $sql);
          while($dados=mysqli_fetch_array($resultado)):
            ?>
            <tr>
              <td class="table-secondary"><?php echo$dados['id'];?>
            </td>
            <td class="table-secondary"><?php echo$dados['nome'];?></td>
            <td class="table-secondary"><?php echo$dados['email'];?></td>
            <td class="table-secondary"><?php echo$dados['endereco'];?></td>
            <td class="table-secondary"><?php echo$dados['cpf'];
            ?></td>
            <td class="table-secondary"></td>
            <td class="table-secondary"></td>
            
            <td class="table-secondary"><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-primary btn-sn active">editar</a>

              <a href="/prova001/php_action/deletar.php?id=<?php echo $dados['id']; ?>" class="btn btn-danger btn-sn active">deletar</a></td>
            </tr>

          </div>
        </div>
        <?php 
      endwhile;


      ?>    

    </tbody>
  </table>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

</main>
</div>

<?php
//Footer
include_once 'inc/footer.php';
?>