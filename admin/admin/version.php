<?php

require_once "connexionn.php";


// Notes :
// PDO::exec() - "Execute an SQL statement and return the number of affected rows"
// PDO::query() - "Executes an SQL statement, returning a result set as a PDOStatement object"


function recuperer_version()
{
  $lignes = array();

  // se connecter à la base
  $cnx = se_connecter();

  // préparation et exécution de la requête
  $requette = "SELECT * FROM version";
  //echo $requette;
  $stmt = $cnx->prepare($requette);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // récupérer toutes les lignes
  $lignes = $stmt->fetchAll();



  return $lignes;
}

?>
