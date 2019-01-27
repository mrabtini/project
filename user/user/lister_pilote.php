<!DOCTYPE html>
<html>
<head>
<style>
body { 
      
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


div.gallery {
  margin: 60px;
  float: left;
  width: 20%;
  height: 100%;

}

div.gallery:hover {
  border: 3px solid black;
  height: 100%;

}

div.gallery img {
  
  width: 100%;
 
}
 
  p{  
  height: 25px;
  font-size: 20px;
  text-align: center;
      margin: 40px;


  }

  

a {
	      text-decoration: none;
		   
			

}
button {
	 border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: center;
  width: 100px;
  padding:10px;
  margin:20px;
  

}
b.b2 { color: blue;
    font-size: 30px;}
div.center{
  margin-bottom: 5px;
}
</style>
</head>
<body  style="margin-top: 50px;margin-left: 30px;background: url(field_dawn_sky_beautiful_scenery_87654_1600x1200.jpg) ;" >
  <div class="wrapper">
            

                  <nav>

                        
                              <ul>
                                   <li><a href="contact.php"><b>contact</b></a></li>

                                     <li><a class="active" href="../index.php?logout='1'"">logOut</a></li>

                              </ul>
                        
                  </nav>
</div>

<?php
        require_once "pilote.php";
        $lignes=array();
        $lignes = recuperer();
        if (count($lignes) == 0) {
            echo "0 résultat";
        } else {
          foreach ($lignes as $ligne)
          {
              echo"<div class='gallery'>";
                echo" <img src='". $ligne["url_image"]."' style='width: 100%;height: 50%;' >";

                                echo"<p ><b><b class='b2'>nom_auteur:    </b>".$ligne["nom_auteur"] ; echo"</b></br></p>";
                                  echo"<p ><b><b class='b2'>version:   </b>".$ligne["version"] ; echo"</b></p>";
                                  echo"<p ><b><b class='b2'>nom:  </b>".$ligne["nom"] ; echo"</b></p>";

                                echo"<p ><b><b class='b2'>systeme  </b>".$ligne["systeme"] ; echo"</b></p>";
                                echo "<center class='center'><button><a href='" . $ligne["file_url"] . "'>"."telecharger"."</a></button></center>" ;
                                



              echo"</div>";
}

}

?>
</body>
</html>