<?php
    session_start();
    include_once('config.php');
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    unset ($_SESSION['loginp']);
    unset ($_SESSION['senhap']);
    unset ($_SESSION['loginm']);
    unset ($_SESSION['senham']);
    unset ($_SESSION['logina']);
    unset ($_SESSION['senhaa']);
    header("Location: home.php");
?>