<?php

  if(isset($_POST['update'])){

    include_once('config.php');

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $cro = $_POST['cro'];  
        $genero = $_POST['genero'];
        $dataNasc = $_POST['dataNasc'];
        $espec = $_POST['especialidade'];

    $sqlUpdate = "UPDATE medicos SET nome_med='$nome', senha_med='$senha', genero='$genero', dataNasc='$dataNasc', especialidade='$espec' WHERE cro='$cro'";

    $result = $conexao->query($sqlUpdate);

    header('Location: mtab.php');

  }
      

?>