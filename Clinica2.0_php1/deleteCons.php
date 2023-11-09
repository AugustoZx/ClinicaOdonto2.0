<?php

if(!empty($_GET['idconsulta']))
{

  include_once('config.php');

  $idconsulta = $_GET['idconsulta'];

  $sqlSelect = "SELECT * FROM consultas WHERE idconsulta=$idconsulta";

  $result = $conexao->query($sqlSelect);

  if($result->num_rows > 0)
  {

    $sqlDelete = "DELETE FROM consultas WHERE idconsulta='$idconsulta'";
    $delete = $conexao->query($sqlDelete);

    header('Location: aconsultas.php');

  }
}  

?>