<!DOCTYPE html>
<html>
<head>
  <title>message</title>
 <style>
   body {
      margin: 0;
      padding: 0;
      font-family: arial;
      background: url(star_galaxy_glow_light_95414_1280x1024.jpg);
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

nav ul li a:focus {
      outline: none;
}
nav ul li a.active {
      background: #E2472F;
      color: #fff;
      border-radius: 6px;
      
}
div.espace {
	background-color: white;
	margin:100px;
	width: 40%;



}


a.bt {

	 border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: center;
  width: 100px;
  

}

div {
  text-align: center;
}
div.espace {
  opacity: 0.5;
}
</style>
</head>
<body>
<div class="wrapper">
            

                  <nav>

                        
                              <ul>
                                    <li><a href="acceuil.php"><b>Home</b></a></li>
                                    <li><a href="liste_utilisateur.php"><b>liste_utilisateur</b></a></li>
                                    <li><a href="lister_pilote.php"><b>liste_pilote</b></a></li>
                                    <li><a href="ajoute_pilote.php"><b>ajoute</b></a></li>
             						 <li><a href="message.php"><b>message</b></a></li>

                                     <li><a class="active" href="../index.php?logout='1'"">logOut</a></li>

                              </ul>
                        
                  </nav>
</div>	



<?php
        require_once "pilote.php";
        $lignes=array();
        $lignes = recupere();




 if (count($lignes) == 0) {
            echo "<h2 style='text-align: center;margin-top: 25%;'>0 résultat<h2>";
        } else {
          foreach ($lignes as $ligne)
          {





            echo "<center><div class='espace'>";
                      

           echo "<div ><b>NOM:      </b> <br>" . $ligne["username"] . "</div></br>";
            echo "<div ><b>EMAIL:</b>   <br>" . $ligne["email"] . "</div><br>";
           echo "<div ><b>message:  </b>  <br> " . $ligne["texte"] . "</div><br>";

                   echo "<center><div><a class='bt' href='supprim.php?id=" . $ligne["id"] . "'>supprimer</a><div></center><br>";
                  
                        echo "</center></div>";

         
            
          }
        }

?>








</div>	


</body>
</html>