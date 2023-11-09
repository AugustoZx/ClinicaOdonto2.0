<?php

  if(isset($_POST['submit'])){
    //print_r($_POST['nome']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];  
    $genero = $_POST['genero'];
    $dataNasc = $_POST['dataNasc'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $result = mysqli_query($conexao, "INSERT INTO pacientes(cpf, nome_pac, email, senha, genero, dataNasc, endereco, telefone)
    VALUES ('$cpf', '$nome', '$email', '$senha', '$genero', '$dataNasc', '$endereco', '$telefone')");

    header('Location: login.php');

  }
      

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro | Odonto</title>
  </head>
  <body>
   <form action="cadastro.php" method="post">
    <div class="container">
        <div class="card">
            <h1>Cadastro</h1>
            <div class="label-float">
                <input name="nome" type="text" required>
                <label for="nome">Nome</label>
            </div>

            <div class="label-float">
              <input name="email" type="email" required>
              <label for="email">E-mail</label>
            </div>

            <div class="label-float">
              <input name="senha" type="password" required>
              <label for="senha">Senha</label>
            </div>

            <div class="label-float">
              <input name="cpf" type="text" required>
              <label for="cpf">CPF</label>
            </div>

              <h3 class="label-float">Gênero:</h3>
              <div>
                <input type="radio" name="genero" value="Masculino">
                <label class="genop" for="masculino">Masculino</label>
              </div>
            
              <div>
                <input type="radio" name="genero" value="Feminino">
                <label class="genop" for="feminino">Feminino</label>
              </div>

              <div>
                <input type="radio" name="genero" value="Outros">
                <label class="genop" for="feminino">Outros</label>
              </div>
            
            <div class="label-float">
              <input type="text" name="dataNasc" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" required>
              <label for="dataNasc">Data de Nascimento</label>
            </div>

            <div class="label-float">
              <input name="endereco" type="text" id="endereco"  required>
              <label for="endereco">Endereço</label>
            </div>

            <div class="label-float">
              <input name="telefone" type="text" id="telefone" required>
              <label for="telefone">Telefone</label>
            </div>

              <div class="justify-center">
                <input class="inputSubmit" type="submit" name="submit" value="Cadastrar">
              </div>


              <div class="justify-center">
                <hr>
              </div>

              <p class="aviso">Já tem uma conta? Faça o
                <a href="login.php">login</a>
              </p>
              <p>
                <a href="index.php" class="voltar">Voltar</a>
              </p>
        </div>
    </div>
  </form>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>