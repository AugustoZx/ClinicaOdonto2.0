<?php

  if(isset($_POST['update'])){

    include_once('config.php');

        $idconsulta = $_POST['idconsulta'];
        $nome_pac = $_POST['nome_paci'];
        $nome_med = $_POST['nome_med'];
        $cpf = $_POST['cpf'];  
        $data = $_POST['data'];
        $hora = $_POST['horario'];
        $espec = $_POST['especialidade'];

    $sqlUpdate = "UPDATE consultas SET nome_paci='$nome_pac', nome_medi='$nome_med', data='$data', hora='$horario', especialidade='$espec', cpf_pac='$cpf' WHERE idconsulta='$idconsulta'";

    $result = $conexao->query($sqlUpdate);

    header('Location: aconsultas.php');

  }
      

?>