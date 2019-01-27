<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	</style>
</head>
<body>
	<div class="wrapper">
            

                  <nav>
                 
                              <ul>
                                   
                                    <li><a href="lister_pilote.php"><b>retour</b></a></li>
                                     <li><a class="active" href="../index.php?logout='1'">logOut</a></li>

                              </ul>
                        
                  </nav>
    </div>


	<div class="contact_title">
	<h1>welcome</h1>
	</div>
	<div class="contact_form">
		<form id="contact_form" method="POST" action="contact_enregistre.php">
			<input type="text" name="username" class="form_control" placeholder="entrer nom" required><br>
			<input type="email" name="email" class="form_control" placeholder=" email" required><br>
			<textarea name="message" class="form_control" placeholder="message" rows="4 " required></textarea><br>
			<input type="submit" class="form_control_submit" value="envoyer">
		</form>
	</div>

</body>
</html>