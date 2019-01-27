<?php

require_once "connexionn.php";


function ajouter($id, $image, $auteur, $version, $nom, $systeme)
{
  $cnx = se_connecter();
   $requette = "INSERT INTO pilote (id, url_image, nom_auteur, id_version, nom, id_systeme) VALUES(:id, :image, :auteur, :version, :nom, :systeme)";

$stmt = $cnx->prepare($requette);

  // préciser les valeurs des paramètres et exécuter
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
  $stmt->bindValue(':image', $image, PDO::PARAM_STR);
   $stmt->bindValue(':auteur', $auteur, PDO::PARAM_STR);
  $stmt->bindValue(':version', $version, PDO::PARAM_INT);
  $stmt->bindValue(':nom', $nom, PDO::PARAM_STR);
  $stmt->bindValue(':systeme', $systeme, PDO::PARAM_INT);
  $stmt->execute();
}

function supprimer($id_pilote)
{
  $cnx = se_connecter();

 $requette = "DELETE FROM pilote WHERE id_pilote = :id_pilote";
  $stmt = $cnx->prepare($requette);

  // préciser les valeurs des paramètres et exécuter
  $stmt->bindValue(':id_pilote', $id_pilote, PDO::PARAM_INT);

  $stmt->execute();


}


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
function utilisateur(){
   $lignes = array();

  // se connecter à la base
  $cnx = se_connecter();
  $requette = "SELECT *
                FROM users ";
  //echo $requette;
  $stmt = $cnx->prepare($requette);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // récupérer toutes les lignes
  $lignes = $stmt->fetchAll();



  return $lignes;

}
function effacer($id){
 $cnx = se_connecter();

 $requette = "DELETE FROM users WHERE id = :id";
  $stmt = $cnx->prepare($requette);

  // préciser les valeurs des paramètres et exécuter
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  $stmt->execute();

}

function recupere()
{
  $lignes = array();

  // se connecter à la base
  $cnx = se_connecter();

  // préparation et exécution de la requête
  $requette = "SELECT *
                FROM message";
  //echo $requette;
  $stmt = $cnx->prepare($requette);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

  // récupérer toutes les lignes
  $lignes = $stmt->fetchAll();

  return $lignes;
}
function supprim($id){
 $cnx = se_connecter();

 $requette = "DELETE FROM message WHERE id = :id";
  $stmt = $cnx->prepare($requette);

  // préciser les valeurs des paramètres et exécuter
  $stmt->bindValue(':id', $id, PDO::PARAM_INT);

  $stmt->execute();

}






?>