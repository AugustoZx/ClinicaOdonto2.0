<?php

  if(isset($_POST['update'])){

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $genero = $_POST['genero'];
    $cpf = $_POST['cpf'];
    $dataNasc = $_POST['dataNasc'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];

    $sqlUpdate = "UPDATE pacientes SET nome_pac='$nome', email='$email', senha='$senha', genero='$genero', dataNasc='$dataNasc', endereco='$endereco', telefone='$telefone' WHERE cpf='$cpf'";

    $result = $conexao->query($sqlUpdate);

    header('Location: ptab.php');

  }
      

?>