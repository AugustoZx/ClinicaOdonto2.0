<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Cadastrado(a) com sucesso!!</h3>
    <main>
    <?php

if(isset($_POST['submit'])){
  //print_r($_POST['email']);
  //print_r('<br>');
  //print_r($_POST['senha']);
  //print_r('<br>');
  //print_r($_POST['nome']);
  //print_r('<br>');
  //print_r($_POST['genero']);
  //print_r('<br>');
  //print_r($_POST['dataNasc']);
  //print_r('<br>');
  //print_r($_POST['endereco']);
  //print_r('<br>');
  //print_r($_POST['telefone']);

  include_once('config.php');

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];
  $genero = $_POST['genero'];
  $dataNasc = $_POST['dataNasc'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];

  $result = mysqli_query($conexao, "INSERT INTO pacientes(email, senha, nome, genero, dataNasc, endereco, telefone) 
  VALUES ('$email', '$senha', '$nome', '$genero', '$dataNasc', '$endereco', '$telefone')");

}
?>
    </main>
</body>
</html>