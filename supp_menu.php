<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
  <div class="content">
    <div class="nav-top">
      <ul>
        <li><a href="modif_menu.php">modifier menus</a></li>
        <li><a href="menus.php">menus</a></li>
        <li><a href="modif_plat.php">modifier plats</a></li>
        <li><a href="plats.php">plats</a></li>
        <li><a href="index.html">accueil</a></li>
      </ul>
    </div>
    <form method="post" action="confirmation_supp_menu.php">
    <div class="middle-form">
      <input type="submit" value="Supprimer menu" class="submit">
    </div>
    <div class="middle-menu">

      <?php include("./assets/include/connection.php"); ?>

      <?php

      $reponse = $bdd->query('SELECT * FROM `plats` LEFT JOIN `menus` ON `plats`.`ID` = menus.id_plat WHERE id_plat IS NOT NULL');

      while ($donnees = $reponse->fetch()) {
        echo "<div class='plat'>" . '<input class="radio" name="id-menu" type="radio" value="' . $donnees['id_plat'] . '" required>' . '<img src="' . $donnees['imageURL'] . '" alt="plat">' . '<p>' . $donnees['nom_menu'] . ", " . $donnees['prix_menu'] . "€" . '</p>' . "</div>";
      }

      ?>
    </div>
    </form>
    <!--<div class="bottom">
      <p>Copyright (c) 2017 Copyright Holder All Rights Reserved.</p>
    </div>-->
    <button onclick="window.location.href='modif_menu.php'" type="button" class="button1">Modifier menu</button>
    <button onclick="window.location.href='supp_menu.php'" type="button" class="button2">Supprimer menu</button>
  </div>
</body>
</html>
