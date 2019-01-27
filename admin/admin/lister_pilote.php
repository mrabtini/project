<!DOCTYPE html>
<html>
<head>
  <title>LIST_PILOTE</title>
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
  background: url(processor_cpu_upgrade_installation_chip_robot_5633_1280x720.jpg) repeat;
 height: 100%;
 width: 100%;
}

div.transbox {
  
  background-color: #ffffff;
  margin: 8%;
  font-weight: bold;
  width: 90%;
  
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
}


div {
  margin: 5%;
  font-weight: bold;
  color: #000000;
}
td {
  text-align: center;
}
img {
  height: 50px;
  width: 50px;
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
        
        <th>image</th>
        <th>auteur</th>
        <th>version</th>
         <th>nom</th>
        <th>systeme</th>
        <th>supprime</th>
      </tr>

<?php
        require_once "pilote.php";
        $lignes=array();
        $lignes = recuperer();




 if (count($lignes) == 0) {
            echo "<tr><td colspan='4'>0 résultat</td></tr>";
        } else {
          foreach ($lignes as $ligne)
          {





            echo "<tr>";

            echo "<td> <img src='" . $ligne["url_image"] . "'/></td>";
           echo "<td>" . $ligne["nom_auteur"] . "</td>";
            echo "<td>" . $ligne["version"] . "</td>";
                        echo "<td>" . $ligne["nom"] . "</td>";

                    echo "<td>" . $ligne["systeme"] . "</td>";
                    echo "<td>";
                   echo "<a href='supprime.php?id_pilote=" . $ligne["id_pilote"] . "'>supprimer</a>";
                   echo "</td>";
            
         
            echo "</tr>";
          }
        }

?>


</table>
</center>
</div>

</body>
</html>