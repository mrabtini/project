<?php

require_once "connexionn.php";


function recuperer()
{
  $lignes = array();

  // se connecter à la base
  $cnx = se_connecter();

  // préparation et exécution de la requête
  $requette = "SELECT p.*, s.systeme, v.version, f.file_url
                FROM pilote p, systeme s,version v, files f
                WHERE p.id_systeme = s.id_systeme
                AND p.id_version = v.id_version
                AND p.id=f.id";
  //echo $requette;
  $stmt = $cnx->prepare($requette);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // récupérer toutes les lignes
  $lignes = $stmt->fetchAll();



  return $lignes;
}
function ajouter($username, $email, $texte)
{
  $cnx = se_connecter();
   $requette = "INSERT INTO message (username, email, texte) VALUES(:username, :email, :texte)";

$stmt = $cnx->prepare($requette);

  // préciser les valeurs des paramètres et exécuter
  $stmt->bindValue(':username', $username, PDO::PARAM_STR);
   $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':texte', $texte, PDO::PARAM_STR);
  $stmt->execute();
}

?>