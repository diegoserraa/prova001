  <?php
  //conexao
  include_once 'php_action/db_connect.php';
  //Header
  include_once 'inc/header.php';
  
  //verifica se pegou o id
  if(isset($_GET['id'])):
    $id=mysqli_escape_string($connect, $_GET['id']);

    //seleciona o campo id da tabela cliente
    $sql="SELECT * FROM cliente WHERE id='$id'";
    $resultado=mysqli_query($connect, $sql);
    $dados=mysqli_fetch_array($resultado);
  endif;
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
            <h1 class="h2">Editar cliente</h1>

          </div>
          
          <div class="container">
            <div class="form-group col-md-9">
              <form action="php_action/update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
                
                <div claas="row">   

                  <h5><b>Campos com * são obrigatorios</b></h5>


                  <label for="nome">Nome*</label>       
                  <input type="text" name="nome" id="nome" class="form-control" value="<?php echo $dados['nome'];?>" required>

                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" value="<?php echo $dados['email'];?>">

                  <label for="endereco">Endereço</label>
                  <input type="text" name="endereco" id="endereco" class="form-control" value="<?php echo $dados['endereco'];?>">

                  <label for="numero">Número do endereço</label>
                  <input type="text" name="numero" id="numero" class="form-control" value="<?php echo $dados['numero'];?>">

                  <label for="bairro">Bairro</label>
                  <input type="text" name="bairro" id="bairro" class="form-control" value="<?php echo $dados['bairro'];?>">

                  <label for="cidade">Cidade</label>
                  <input type="text" name="cidade" id="cidade" class="form-control" value="<?php echo $dados['cidade'];?>">

                  <label for="cep">CEP</label>
                  <input type="text" name="cep" id="cep" class="form-control" value="<?php echo $dados['cep'];?>">

                  <label for="uf">Estado</label>
                  <input type="text" name="uf" id="uf" class="form-control" value="<?php echo $dados['uf'];?>">

                  <label for="cpf">CPF*</label>
                  <input type="text" name="cpf" id="cpf" class="form-control" value="<?php echo $dados['cpf'];?>" required>


                  <button type="submit" name="btn-editar"  class="btn" >Atualizar</button>
                  

                </div>
              </div>
            </div>

          </form>

          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>


        </main>
      </div>

      <?php
  //Footer
      include_once 'inc/footer.php';
      ?>