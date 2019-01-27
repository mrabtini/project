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
	
  </head>
  <body>
    <?php
      require_once "pilote.php";

      $idpilote = $_GET["id_pilote"];

      if (supprimer($idpilote) === false) {
        echo "<h2>Erreur lors de la suppression </h2>";
      } else {
        echo "<h2>Suppression rĂ©ussit</h2>";
      }

     ?>
	 
	 <div class="wrapper">
            

                  <nav>
                        

                        
                              <ul>
							                                      <li><a href="acceuil.php"><b>Home</b></a></li>

                                    <li><a href="lister_pilote.php"><b>liste_pilote</b></a></li>

                                     <li><a class="active" href="../index.php?logout='1'">logOut</a></li>

                              </ul>
                        
                  </nav></div>
     
	 <br>
	 
     

  </body>
</html>
