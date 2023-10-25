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

}
    header('Location: login.php');
?>
    </main>
</body>
</html>