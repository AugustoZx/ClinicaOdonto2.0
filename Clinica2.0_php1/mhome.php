<?php
  session_start();
  include_once('config.php');
  if((!isset($_SESSION['loginm']) == true) and (!isset ($_SESSION['senham']) == true))
  {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Home | Odonto</title>
    <link rel="stylesheet" href="css/mhome.css">
    
  </head>
  <body>

  <nav>
      <div class="btext">
        <?php
        $cro = $_SESSION['loginm'];
        $dados = mysqli_query($conexao, "SELECT nome_med FROM medicos WHERE cro = '$cro'");
        while($nome = mysqli_fetch_assoc($dados))
        {
          echo "<p>Olá, " . $nome['nome_med'] . "</p>";
        }
        ?>
      </div>
        <a class="btn" href="logout.php">Sair</a>
        <a class="btn" href="mconsultas.php">Consultas</a>
    </nav>
    <div id="dov">
        <img id="logo" src="img/logo.png" id="logo">
    </div>

    <footer>
        &copy; Augusto Oliveira - Gutierri da Silva - William Araújo - Giovani Barbosa - Leonardo Gomes - Gustavo Mazzucato
    </footer>

    <main>
    <div class="txt_tratamento">
      <h1>Nossos tratamentos</h1>
      <p>
        Dentes saudáveis e um sorriso harmônico podem melhorar a autoestima, influenciando em aspectos da vida
        social, profissional e pessoal dos pacientes. Por isso, a odontologia moderna não se limita apenas na
        estética. A saúde bucal é fundamental para a saúde do corpo humano como um todo. Buscamos lhe oferecer
        além de novo sorriso agradável, saúde ao corpo inteiro.
      </p>

      <a class="btnSM" href="informacoes.html">Saiba mais...</a>
    </div>
    <div class="imagem_dentista">
      <img src="img/dentista.avif" width="500" height="305" alt="imagem de um dentista">
    </div>
  </main>

  <footer class="rodape">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-sm-12 logo">
          <img
            src="img/logo.png" width="223x" height="80px"
            alt="logo benati" />
          <p>
            <a href="https://www.google.com/maps?saddr=Current+Location&daddr=Benatti+Odontologia" target="_blank">
              Av. Paulista, 203 <br>
              01111-1020<br>
              São Paulo – SP </a>
            <br>
            Fone:
            <a href="#">(11) 96927-4019</a>
          </p>
          <ul class="rodape_list">
            <li class="politicas"><a href="#">Nossa
                Política e Privacidade</a></li>
          </ul>
          <div class="social-icon--wrap">

            <div class="social-icon--item"><a target="_blank"
                class="social-icon--a">
                <img src="img/facebook.svg" alt="Icone Facebook" class='social-icon--img'></a>
            </div>


            <div class="social-icon--item"><a 
                target="_blank" class="social-icon--a">
                <img
                  src="img/youtube.svg" 
                  alt="Icone YouTube" class='social-icon--img'></a>
            </div>
          </div>
        </div>

        <div class="col-lg-6 p-l-50 none-mobile">
          <span class="rodape_title">Nossos serviços</span>
          <div class="row teste rodape_list">
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Clareamento
                Dental</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Dentes do Siso</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Implante
                Dentário</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Odontologia
                Estética</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Odontologia
                Preventiva</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Odontologia
                Restauradora &#8211; Perda de Dentes</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Tratamento de Canal
                no Dente</a></li>
            <li class="col-lg-6 col-sm-6 col-xs-12"><a
                href="#">Tratamento de
                Gengiva</a></li>
          </div>
        </div>

        <div class="col-lg-3 col-xs-12 none-mobile">
          <span class="rodape_title">Funcionamento</span>
          <ul class="row rodape_list">
            <li class="col-lg-12 col-sm-6 col-xs-12">Segunda-Feira: - 08:00 - 18:00</li>
            <li class="col-lg-12 col-sm-6 col-xs-12">Terça-Feira: - 08:00 - 18:00</li>
            <li class="col-lg-12 col-sm-6 col-xs-12">Quarta-Feira: - 08:00 - 18:00</li>
            <li class="col-lg-12 col-sm-6 col-xs-12">Quinta-Feira: - 08:00 - 18:00</li>
            <li class="col-lg-12 col-sm-6 col-xs-12">Sexta-Feira: - 08:00 - 18:00</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>