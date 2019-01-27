<!DOCTYPE html>
<html>
<head>
  <title>LIST_UTILISATEUR</title>
 <style>

nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      padding: 1px 100px;
      box-sizing: border-box;
      transition: .3s;
}
nav.black {
      background: rgba(0,0,0,0.8);
      height: 100px;
      padding: 1px 100px;
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
body {
  background: url(programmer_coder_admin_administrator_5628_1280x720.jpg) repeat;
   height: 100%;
 width: 100%;
 
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  margin: 10%;
  font-weight: bold;
  opacity: 0.6;
  filter: alpha(opacity=60); 
}


div {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
td {
  text-align: center;
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
  <div class="transbox">
<center><table border="10" style="width: 100%;height: 100%;">
<tr>
        
        <th>Nom</th>
        <th>email</th>
        
        <th>supprime</th>

</tr>

	<?php
        require_once "pilote.php";
        $lignes=array();
        $lignes = utilisateur();

        if (count($lignes) == 0) {
            echo "<tr><td colspan='4'>0 résultat</td></tr>";
        } else {
          foreach ($lignes as $ligne)
          {
          	echo "<tr>";
          	 echo "<td>" . $ligne["username"] . "</td>";
          	   echo "<td>" . $ligne["email"] . "</td>";
          	     echo "<td><center><a href='supprimee.php?id=" . $ligne["id"] . "'>supprimer</a></center></td>";


          	     echo "</tr>";

		  }
}
    ?>
</table>
</center>
</div>
</div>
</body>
</html>