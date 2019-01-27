

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    	<link rel="stylesheet" type="text/css" href="style.css">

    <title></title>


<body>
<div class="wrapper">
            

                  <nav>
                        

                        
                              <ul>
							                                      <li><a href="lister_pilote.php"><b>liste</b></a></li>
                                    <li><a href="contact.php"><b>nouvelle_message</b></a></li>

                                    

                                     <li><a class="active" href="../index.php?logout='1'">logOut</a></li>

                              </ul>
                        
                  </nav></div>
     


<?php

require_once"pilote.php";

       
        $username = $_POST["username"];

     
        $email = $_POST["email"];
      
     
        $texte = $_POST["message"];

      

      if (ajouter($username,$email, $texte) === false) {
        echo "<h2 style='text-align: center;
    margin-top: 25%;'>erreur  </h2>";
      } else {
        echo "<h2 style='text-align: center;
    margin-top: 25%;'>message envoyer</h2>";
      }
 


?>
</body>
</html>