<?php
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home | Odonto</title>
    <link rel="stylesheet" href="css/phome.css">
    
  </head>
  <body>

  <nav>
      <div class="btext">
        <?php
        $cpf = $_SESSION['login'];
        $dados = mysqli_query($conexao, "SELECT nome_pac FROM pacientes WHERE cpf = '$cpf'");
        while($nome = mysqli_fetch_assoc($dados))
        {
          echo "<h3>Olá, " . $nome['nome_pac'] . "</h3>";
        }
        ?>
      </div>
        <a class="btn" href="logout.php">Sair</a>
        <a class="btn" href="pconsultas.php">Consultas</a>
    </nav>
    <div id="dov">
        <img id="logo" src="img/logo.png" id="logo">
    </div>

    <footer>
        &copy; Augusto Oliveira - Gutierri da Silva - William Araújo - Giovani Barbosa - Leonardo Gomes - Gustavo Mazzucato
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>