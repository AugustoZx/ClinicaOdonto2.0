<?php
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['logina']) == true) and (!isset ($_SESSION['senhaa']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: index.php');
  }

  if(!empty($_GET['idconsulta']))
  {

    include_once('config.php');

    $idconsulta = $_GET['idconsulta'];

    $sqlSelect = "SELECT * FROM consultas WHERE idconsulta=$idconsulta";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {

      while($dados = mysqli_fetch_assoc($result))
      {
        $nome_paci = $dados['nome_paci'];
        $nome_medi = $dados['nome_medi']; 
        $espec = $dados['especialidade'];
        $data = $dados['data'];
        $hora = $dados['hora'];
        $cpf = $dados['cpf_pac'];
      }
    }

    else
    {
      header('Location: aconsultas.php');
    }

  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/consulta.css">
    <title>Consulta | Odonto</title>
  </head>
  <body>
   <form action="saveEditcons.php" method="post">
    <div class="container">
        <div class="card">
            <h1>Editar Consulta</h1>
          
            <select class="label-float" name="especialidade" id="especialidade" required>
            <option value="" selected>Especialidade</option>
                <option name="especialidade" value="Ortodontista">Ortodontista</option>
                <option name="especialidade" value="Odontopediatra">Odontopediatra</option>
                <option name="especialidade" value="Clínico geral">Clínico geral</option>
                <option name="especialidade" value="Implantodentista">Implantodentista</option>
                <option name="especialidade" value="Estomatologista">Estomatologista</option>
                <option name="especialidade" value="Periodontista">Periodontista</option>
                <option name="especialidade" value="Odontologia estética">Odontologia estética</option>
            </select>

            <select name="nome_med" id="nome_med" class="form-select label-float" aria-label="Default select example" required>
                <option selected value="">Médico</option>
                <?php
                  $sql2 = $conexao->query("SELECT cro, nome_med FROM medicos");
                  $nomemed = $sql2->fetch_all(MYSQLI_ASSOC);
                  print_r($nomemed);
                  foreach($nomemed as $option2) {
                    ?>
                  <option class="nome_med" value="<?php echo $option2['nome_med']?>"><?php echo $option2['nome_med']?></option>
                <?php
                  }
                ?>
               
            </select>
                        
            <div class="label-float">
              <input type="text" name="data" onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" value="<?php echo $data ?>" required>
              <label for="data">Data</label>
            </div>

            <div class="label-float">
              <input name="horario" type="text" id="horario" onfocus="(this.type='time')" onblur="if(!this.value) this.type='text'" value="<?php echo $hora ?>" required>
              <label for="horario">Horário</label>
            </div>

            <div class="label-float">
                <input name="nome_paci" type="hidden" value="<?php echo $nome_paci ?>" required>
                <input name="cpf" type="hidden" value="<?php echo $cpf ?>" required>
                <input name="idconsulta" type="hidden" value="<?php echo $idconsulta ?>" required>
            </div>

              <div class="justify-center">
                <input class="inputSubmit" type="submit" name="update" value="Editar">
              </div>


              <div class="justify-center">
                <hr>
              </div>

              <p>
                <a href="aconsultas.php" class="voltar">Voltar</a>
              </p>
        </div>
    </div>
  </form>
           
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>