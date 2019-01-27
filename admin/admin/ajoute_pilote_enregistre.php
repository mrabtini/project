<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
	<style>
    body {
      margin: 0;
      padding: 0;
      font-family: arial;
}

nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      padding: 10px 100px;
      box-sizing: border-box;
      transition: .3s;
}
nav.black {
      background: rgba(0,0,0,0.8);
      height: 100px;
      padding: 10px 100px;
}
 

nav ul {
      list-style: none;
      float: right;
      margin: 0;
      padding: 0;
      display: flex;
}
nav ul li {
      list-style: none;
}
nav ul li a {
      line-height: 80px;
      color: black;
      padding: 12px 30px;
      text-decoration: none;
      text-transform: uppercase;
      transition: .3s;
}

nav ul li a:focus {
      outline: none;
}
nav ul li a.active {
      background: #E2472F;
      color: #fff;s
      border-radius: 6px;
      
}
	
	h2 {
		text-align: center;
		margin-top: 25%;
	}
</style>
<body>
<div class="wrapper">
            

                  <nav>
                        

                        
                              <ul>
							                        <li><a href="acceuil.php"><b>Home</b></a></li>
                                    <li><a href="ajoute_pilote.php"><b>nouvelle_pilote</b></a></li>
                                     <li><a href="lister_pilote.php"><b>liste_pilote</b></a></li>
                                     <li><a href="message.php"><b>message</b></a></li>

                                     <li><a class="active" href="../index.php?logout='1'">logOut</a></li>

                              </ul>
                        
                  </nav></div>
     




<?php
require"connexion.php";
if (!empty($_FILES)) {
  $file_name = $_FILES['fichier']['name'];
  $file_extension = strrchr($file_name, ".");

  $file_tmp_name = $_FILES['fichier']['tmp_name'];

  $file_dest = 'files/'.$file_name;
  $extensions_autorisees = array('.pdf', '.PDF','.exe');
  if (in_array($file_extension, $extensions_autorisees)) {
    if (move_uploaded_file($file_tmp_name, $file_dest)) {
   $req = $db->prepare('INSERT INTO files(name, file_url) VALUES(?,?)');

      $req->execute(array($file_name, $file_dest));
          }else {
            echo "<h2 style='text-align: center;
    margin-top: 25%;'>error evoie</h2>";
          }



  }else {
    echo"<h2>seulement pdf ou exe</h2>";
  }



      require_once"pilote.php";

          $id = $db->lastInsertId();


        $image= "";
      if (isset($_POST["url_image"]))
      $image = $_POST["url_image"];
     
      $auteur= "";
      if (isset($_POST["nom_auteur"]))
        $auteur = $_POST["nom_auteur"];

       $nom= "";
      if (isset($_POST["nom"]))
        $nom = $_POST["nom"];
      
      $systeme= "";
      if (isset($_POST["id_systeme"]))
        $systeme = $_POST["id_systeme"];

      $version= "";
      if (isset($_POST["id_version"]))
        $version = $_POST["id_version"];

      if ($systeme == "" || $version == "" || !in_array($file_extension, $extensions_autorisees) || ajouter($id, $image, $auteur, $version, $nom, $systeme) === false) {
        echo "<h2>Erreur lors de l'insertion</h2>";
      } else {
        echo "<h2>Insertion rĂ©ussit</h2>";
      }
      

}


?>
</body>
</html>