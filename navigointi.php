<?php
$sivu = $_SERVER['PHP_SELF'];
/* '/php-esittely/php-esittely.php' */
$loppuosa = substr($sivu,strrpos($sivu,"/") + 1);
$osoite = substr($loppuosa,0,strpos($loppuosa,"."));
$valittu = "class=\"valittu\" ";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Neilikka</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="etusivu.php">Neilikka</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a <?php if ($osoite == "etusivu") echo $valittu;?> href="etusivu.php"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="dropdown"><a <?php if ($osoite == "tuotteet") echo $valittu;?>class="dropdown-toggle" data-toggle="dropdown" href="#">Tuotteet <span class="caret"></span></a>
      <!--<li class="dropdown"><a <?php if ($osoite == "kategoriat") echo $valittu;?> href="#"   >Tuotteet <span class="caret"></span></a>-->
        <ul class="dropdown-menu">
          <li><a  href="tuotteet.php?kategoria=1">Sisäkasvit</a></li>
          <li><a  href="tuotteet.php?kategoria=2">Ulkokasvit</a></li>
          <li><a  href="tuotteet.php?kategoria=3">Työkalut</a></li>
          <li><a  href="tuotteet.php?kategoria=4">Kasvien hoito</a></li>
        </ul>
      </li>
      <li><a <?php if ($osoite == "kaupat") echo $valittu;?>  href="kaupat.php">Mymälät</a></li>
      <li><a <?php if ($osoite == "tietoa") echo $valittu;?> href="tietoa.php">Tietoa meistä</a></li>
      <li><a <?php if ($osoite == "viesti") echo $valittu;?> href="viesti.php">Ota yhteyttä</a></li>
      <?php
      if(isset($_SESSION['admin'])){
      if($_SESSION['admin'] == 1) {?>
       <li><a <?php if ($osoite == "uusi_tuote") echo $valittu;?> href="uusi_tuote.php">Uusi tuote</a></li>
       <?php
      }} ?>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['admin'])){?>
        <li><a <?php if ($osoite == "ulos") echo $valittu;?> href="ulos.php"><span class="glyphicon glyphicon-log-in"></span> Kirjaudu ulos</a></li>
       <?php     
      } else{?>
      <li><a <?php if ($osoite == "rekisterointi_email") echo $valittu;?> href="rekisterointi_email.php"><span class="glyphicon glyphicon-user"></span> Luo tunnus</a></li>
      <li><a <?php if ($osoite == "kirjaudu") echo $valittu;?> href="kirjaudu.php"><span class="glyphicon glyphicon-log-in"></span> Kirjaudu</a></li>
     <?php 
    }?>
    </ul>
  </div>
</nav>
  


