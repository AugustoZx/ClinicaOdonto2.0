<?php
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['logina']) == true) and (!isset ($_SESSION['senhaa']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: index.php');
  }
  if(!empty($_GET['cpf']))
  {

    include_once('config.php');

    $cpf = $_GET['cpf'];

    $sqlSelect = "SELECT * FROM pacientes WHERE cpf=$cpf";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {

      while($dados = mysqli_fetch_assoc($result))
      {
        $nome = $dados['nome_pac'];
        $email = $dados['email'];
        $senha = $dados['senha'];
        $cpf = $dados['cpf'];
        $genero = $dados['genero'];
        $dataNasc = $dados['dataNasc'];
        $endereco = $dados['endereco'];
        $telefone = $dados['telefone'];
        
      }
    }

    else
    {
      header('Location: mtab.php');
    }

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
   <form action="saveEditpac.php" method="post">
    <div class="container">
        <div class="card">
            <h1>Cadastro</h1>
            <div class="label-float">
                <input name="nome" type="text" value="<?php echo $nome ?>" required>
                <label for="nome">Nome</label>
            </div>

            <div class="label-float">
              <input name="email" type="email" value="<?php echo $email ?>" required>
              <label for="email">E-mail</label>
            </div>

            <div class="label-float">
              <input name="senha" type="text" value="<?php echo $senha ?>" required>
              <label for="senha">Senha</label>
            </div>

              <h3 class="label-float">Gênero:</h3>
              <div>
                <input type="radio" name="genero" value="Masculino" <?php echo ($genero == 'Masculino') ? 'checked' : '' ?> required>
                <label class="genop" for="masculino">Masculino</label>
              </div>
            
              <div>
                <input type="radio" name="genero" value="Feminino" <?php echo ($genero == 'Feminino') ? 'checked' : '' ?> required>
                <label class="genop" for="feminino">Feminino</label>
              </div>

              <div>
                <input type="radio" name="genero" value="Outros" <?php echo ($genero == 'Outros') ? 'checked' : '' ?> required>
                <label class="genop" for="feminino">Outros</label>
              </div>
            
            <div class="label-float">
              <input type="text" name="dataNasc" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" value="<?php echo $dataNasc ?>" required>
              <label for="dataNasc">Data de Nascimento</label>
            </div>

            <div class="label-float">
              <input name="endereco" type="text" id="endereco" value="<?php echo $endereco ?>" required>
              <label for="endereco">Endereço</label>
            </div>

            <div class="label-float">
              <input name="telefone" type="text" id="telefone" value="<?php echo $telefone ?>" required>
              <label for="telefone">Telefone</label>
            </div>

            <input type="hidden" name="cpf" value="<?php echo $cpf ?>">

              <div class="justify-center">
                <input class="inputSubmit" type="submit" name="update" value="Editar">
              </div>


              <div class="justify-center">
                <hr>
              </div>

              <p>
                <a href="ptab.php" class="voltar">Voltar</a>
              </p>
        </div>
    </div>
  </form>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>