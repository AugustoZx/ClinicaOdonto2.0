<?php

if(!empty($_GET['cpf']))
{

  include_once('config.php');

  $cpf = $_GET['cpf'];

  $sqlSelect = "SELECT * FROM pacientes WHERE cpf=$cpf";

  $result = $conexao->query($sqlSelect);

  if($result->num_rows > 0)
  {

    $sqlDelete = "DELETE FROM pacientes WHERE cpf='$cpf'";
    $delete = $conexao->query($sqlDelete);

    header('Location: ptab.php');

  }
}  

?>