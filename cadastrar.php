<?php
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
            <a class="nav-link" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(atual)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="clientes.php">
              <span data-feather="file"></span>
              clientes<span class="sr-only">(atual)</span>
            </a>
            
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Cadastrar clientes</h1>
          
        </div>
        
        <br>

        <div class="container">
          <div class="form-group col-md-9">

            <form  action="php_action/create.php" method="POST">
              <div claas="row">   

                <h5><b>Campos com * são obrigatorios</b></h5>

                <label for="nome">Nome*</label>       
                <input type="text" name="nome" id="nome" class="form-control" required>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">

                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" id="endereco" class="form-control">

                <label for="numero">Número do endereço</label>
                <input type="text" name="numero" id="numero" class="form-control">

                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" class="form-control">

                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="cidade" class="form-control">

                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" class="form-control">

                <label for="uf">Estado</label>
                <input type="text" name="uf" id="uf" class="form-control">

                <label for="cpf">CPF*</label>
                <input type="text" name="cpf" id="cpf" class="form-control" required >

              </div>
              <br>
              <button type="submit" name="btn-cadastrar">cadastrar</button>
              <a href="clientes.php" class="btn ">listar Clientes</a>


            </form>

          </div>
        </div>

        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


      </main>
    </div>

    <?php
//Footer
    include_once 'inc/footer.php';
    ?>