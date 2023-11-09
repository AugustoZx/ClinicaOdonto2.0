<?php

if(!empty($_GET['cro']))
{

  include_once('config.php');

  $cro = $_GET['cro'];

  $sqlSelect = "SELECT * FROM medicos WHERE cro=$cro";

  $result = $conexao->query($sqlSelect);

  if($result->num_rows > 0)
  {

    $sqlDelete = "DELETE FROM medicos WHERE cro='$cro'";
    $delete = $conexao->query($sqlDelete);

    header('Location: mtab.php');

  }
}  

?>