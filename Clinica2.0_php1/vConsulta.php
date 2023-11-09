<?php

session_start();

if(isset($_POST['submit'])){
  //print_r($_POST['nome']);

  include_once('config.php');

  $nome_paci = $_POST['nome_paci'];
  $nome_medi = $_POST['nome_med']; 
  $espec = $_POST['especialidade'];
  $data = $_POST['data'];
  $horario = $_POST['horario'];
  $cpf = $_SESSION['loginp'];

  //print_r($_POST['especialidade']);

    $result = mysqli_query($conexao, "INSERT INTO consultas(nome_paci, nome_medi, data, hora, cpf_pac) 
    VALUES ('$nome_paci', '$nome_medi', '$data', '$horario', '$cpf')");

header('Location: pconsultas.php');

}
    
?>
    </main>
</body>
</html>