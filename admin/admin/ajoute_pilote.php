
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
     <style type="text/css">
	 
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
      color: white;
      padding: 12px 30px;
      text-decoration: none;
      text-transform: uppercase;
      transition: .3s;
}


nav ul li a.active {
      background: #E2472F;
      color: #fff;
      border-radius: 6px;
      
}


      input[type="checkbox"], input[type="radio"], label {
        cursor: pointer;
      }
	  * {
		  margin: 0;
      padding: 0;

	  }
    h1 {
      text-align: center;
      padding: 20px;
      font-size: 50px;
    }
   
    label {
      font-family: sans-serif;
      color: black;
      font-size: 25px;
      font-style: italic;

    }
    input#dd {
      width: 300px;height:30px;
      border: none;
      border-radius: 3px;
      padding: 5px;

    }
    .submit {
      width: 300px;
      height: 30px;
      color: black;
      background-color: green;
            font-family: sans-serif;
                  font-style: italic;
                        border-radius: 3px;

       }
	       p {
      font-family: sans-serif;
      color: #2ECCFA;
      font-size: 25px;
      font-style: italic;

    }
    </style>
  </head>
  <body style="background: url(windows_7_gray_black_yellow_33219_1280x720.jpg);z-index: -1;">
  <div class="wrapper">
            

                  <nav>
                        

                        
                              <ul>
                                    <li><a href="acceuil.php"><b>Home</b></a></li>
                                    <li><a href="liste_utilisateur.php"><b>liste_utilisateur</b></a></li>
                                    <li><a href="lister_pilote.php"><b>liste_pilote</b></a></li>
                                    <li><a href="ajoute_pilote.php"><b>ajoute</b></a></li>
                                     <li><a href="message.php"><b>message</b></a></li>

                                     <li><a class="active" href="../index.php?logout='1'">logOut</a></li>

                              </ul>
                        
                  </nav></div><br><br>
  <h1>ajouter</h1>
  <div class="registre" style="background: #1111;width: 500px;margin: 0px 0px 0px 430px;font-size: 20px; padding: 20px;border-radius: 10px;">
  <form enctype="multipart/form-data" method="POST" action="ajoute_pilote_enregistre.php" style="margin-left: 50px;">
      

<br><br>
  <p>choisie fichier</p><br>
  <input type="file" name="fichier"  > <br><br>
  <p>donner url image</p><br>
    <input type="text" name="url_image"  id="dd" placeholder="C:\\" ><br><br>

       <p>nom_auteur</p><br>

        <input type="text" name="nom_auteur"  id="dd" placeholder="entrer nom_auteur"><br><br>
          <p>nom_fichier</p><br>

        <input type="text" name="nom"id="dd" placeholder="entre nom fichier"><br><br>

    <p>systeme</p>


      <br>
      <?php
        require_once "systeme.php";

        $lignes = array();


        $lignes = recuperer_systeme();

        foreach ($lignes as $ligne) {
          echo "<input type='radio' id='mt_" . $ligne["id_systeme"] . "'name='id_systeme' value='" . $ligne["id_systeme"] . "' >";
          echo "<label for='mt_" . $ligne["id_systeme"] . "'> " . $ligne["systeme"] . "</label>";
        }
       ?>

       <br>
       <br>
          <p>version</p><br>

      
      <?php
        require_once "version.php";

        $lignes = recuperer_version();

        foreach ($lignes as $ligne) {
          echo "<input type='radio' id='VR_" . $ligne["id_version"] . "'name='id_version' value='" . $ligne["id_version"] . "' >";
          echo "<label for='VR_" . $ligne["id_version"] . "'> " . $ligne["version"] . "</label>";
        }
       ?>



       <br><br>

  <input type="submit" name="envoyer" class="submit">
  
  
  </form>
  
  
  </div>
  </body>
</html>


