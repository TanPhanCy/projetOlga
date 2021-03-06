<?php
include 'database/connect.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta content="musique" name="keywords">
<meta content="Download movies" name="description">
<link rel="stylesheet" type="text/css" href="public/asset/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="public/asset/css/livepreview-demo.css" rel="stylesheet" type="text/css">

<title>Elders</title>
</head>

<body>
<!-- Shell -->
<div id="shell">
<!-- Header -->
<div id="header">
  <h1 id="logo"><a href="#"><img src="public/asset/image/the-elders-logo.png" alt=""></a></h1>
  <div class="langue"> <span>Langue:</span>
    <ul>
      <li><a class="fr" href="#">FR</a></li>
      <li><a class="en" href="#">EN</a></li>
    </ul>
  </div>

  <!-- Navigation -->
  <div id="navigation">
    <ul>
      <li><a class="active" href="#">HOME</a></li>
      <li><a href="#">NEWS</a></li>
      <li><a href="#">IN THEATERS</a></li>
      <li><a href="#">COMING SOON</a></li>
      <li><a href="#">CONTACT</a></li>
      <li><a href="#">ADVERTISE</a></li>
    </ul>
  </div>
  <!-- end Navigation -->

  <!-- Sub-menu -->
  <div id="sub-navigation">
    <div id="search">
      <form action="home_submit" method="get" accept-charset="utf-8">
        <input type="text" name="search field" value="Recherche" id="search-field" title="Enter search here" class="blink search-field"/>
        <input type="submit" value="GO!" class="search-button" />
      </form>
    </div>
    <ul>
      <li><a href="?genre=Classique">CLASSIQUE</a></li><br>
      <li><a href="?genre=Horreur">D'HORREUR</a></li><br>
      <li><a href="?genre=Enfant">POUR ENFANT</a></li><br>
      <li><a href="?genre=Comedie">COMEDIE</a></li><br>
    </ul>
  </div>
  <!-- end Sub-Menu -->

</div>
<!-- end Header -->
