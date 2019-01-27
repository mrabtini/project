<?php

  $bd_url_serveur = "localhost";
  $bd_utilisateur = "root";
  $bd_mot_de_passe = "";
  $bd_nom = "loginsystem";

  try {
      $db = new PDO("mysql:host=" . $bd_url_serveur . ";dbname=" . $bd_nom, $bd_utilisateur, $bd_mot_de_passe);
  
  } catch(PDOException $e)
      {
      die('erreur'. $e->getMessage());
      }

  return null;


?>
