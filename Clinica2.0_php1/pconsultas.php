<?php
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['loginp']) == true) and (!isset ($_SESSION['senhap']) == true))
  {
    header('Location: index.php');
  }

  $cpf = $_SESSION['loginp'];
  $sql = mysqli_query($conexao, "SELECT * FROM consultas WHERE cpf_pac = '$cpf'");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CONSULTAS</title>
</head>
<body>
    <nav>

    </nav>
    
    <div class="m-5">
      <div class="d-flex justify-content-between align-items-center pt-3">
        <h1>Consultas</h1>
        <div>
        <a type="button" class="btn btn-outline-success bt-sm" href="pcconsulta.php">Agendar Consulta</a>
        <a type="button" class="btn btn-outline-danger bt-sm" href="phome.php">Voltar</a>
        </div>
      </div>
    </div>
      <div class="m-5">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Paciente</th>
                <th scope="col">Médico</th>
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
              </tr>
            </thead>
            <tbody>
                <?php
                  while($consulta = mysqli_fetch_assoc($sql))
                  {
                    echo"<tr>";
                    echo"<td>".$consulta['idconsulta']."</td>";
                    echo"<td>".$consulta['nome_paci']."</td>";
                    echo"<td>".$consulta['nome_medi']."</td>";
                    echo"<td>".$consulta['data']."</td>";
                    echo"<td>".$consulta['hora']."</td>";
                    echo"</tr>";
                  }
                ?>
            </tbody>
          </table>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>