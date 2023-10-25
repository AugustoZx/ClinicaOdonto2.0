<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
    {

        include_once('config.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql1 = "SELECT * FROM pacientes WHERE cpf = '$login' and senha = '$senha'";
        $sql2 = "SELECT * FROM medicos WHERE cro = '$login' and senha_med = '$senha'";
        $sql3 = "SELECT * FROM adm WHERE login = '$login' and senha_adm = '$senha'";

        $result1 = $conexao->query($sql1);
        $result2 = $conexao->query($sql2);
        $result3 = $conexao->query($sql3);

    /*  if(mysqli_num_rows($result1) < 1)
        {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['login'] = $login;
            $_SESSION['senha'] = $senha;
            header('Location: phome.php');
        } */

        if(mysqli_num_rows($result1) < 1 and mysqli_num_rows($result2) < 1 and mysqli_num_rows($result3) < 1)
        {
            unset ($_SESSION['login']);
            unset ($_SESSION['senha']);
            header('Location: login.php');
        } elseif (mysqli_num_rows($result1) == 1) {
            $_SESSION['loginp'] = $login;
            $_SESSION['senhap'] = $senha;
            header('Location: phome.php');
        } elseif (mysqli_num_rows($result2) == 1) {
            $_SESSION['loginm'] = $login;
            $_SESSION['senham'] = $senha;
            header('Location: mhome.php');
        } else {
            $_SESSION['logina'] = $login;
            $_SESSION['senhaa'] = $senha;
            header('Location: ahome.php');
        }

    }
/*  else
    {
        header('Location:login.php');
    } */
?>