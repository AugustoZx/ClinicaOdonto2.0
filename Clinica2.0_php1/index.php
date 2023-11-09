<?php
    session_start();
  include_once('config.php');
  if((isset($_SESSION['loginp']) == true) and (isset ($_SESSION['senhap']) == true))
  {
    header('Location: phome.php');
  }elseif((isset($_SESSION['loginm']) == true) and (isset ($_SESSION['senham']) == true)){
    header('Location: mhome.php');
  }elseif((isset($_SESSION['logina']) == true) and (isset ($_SESSION['senhaa']) == true)){
    header('Location: ahome.php');
  }else{
    header('Location: home.php');
  }
?>