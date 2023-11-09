<?php

if(isset($_POST['submit'])){
  //print_r($_POST['nome']);

  include_once('config.php');

  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $cro = $_POST['cro'];  
  $genero = $_POST['genero'];
  $dataNasc = $_POST['dataNasc'];
  $espec = $_POST['especialidade'];

  //print_r($_POST['especialidade']);

    $result = mysqli_query($conexao, "INSERT INTO medicos(cro, nome_med, senha_med, genero, dataNasc, especialidade) 
    VALUES ('$cro', '$nome', '$senha', '$genero', '$dataNasc', '$espec')");

    header('Location: mtab.php');

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
   <form action="mcadastro.php" method="post">
    <div class="container">
        <div class="card">
            <h1>Cadastro de Médico</h1>
            <div class="label-float">
                <input name="nome" type="text" required>
                <label for="nome">Nome</label>
            </div>

            <div class="label-float">
              <input name="senha" type="password" required>
              <label for="senha">Senha</label>
            </div>

            <div class="label-float">
              <input name="cro" type="text" required>
              <label for="cro">CRO</label>
            </div>

            <select class="label-float" name="especialidade" id="especialidade">
                <option value="" selected>Especialidade</option>
                <option name="especialidade" value="Ortodontista">Ortodontista</option>
                <option name="especialidade" value="Odontopediatra">Odontopediatra</option>
                <option name="especialidade" value="Clínico geral">Clínico geral</option>
                <option name="especialidade" value="Implantodentista">Implantodentista</option>
                <option name="especialidade" value="Estomatologista">Estomatologista</option>
                <option name="especialidade" value="Periodontista">Periodontista</option>
                <option name="especialidade" value="Odontologia estética">Odontologia estética</option>
            </select>

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

              <div class="justify-center">
                <input class="inputSubmit" type="submit" name="submit" value="Cadastrar">
              </div>


              <div class="justify-center">
                <hr>
              </div>

              <p>
                <a href="mtab.php" class="voltar">Voltar</a>
              </p>
        </div>
    </div>
  </form>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>