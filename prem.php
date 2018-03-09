<!DOCTYPE html>



<html>

    <head>

        <title>Page de connection</title>

        <meta charset="utf-8" />

    </head>

    
		<body background="www\integrationcontinue\image\wifi.png">
        <h2>Connection</h2>
			<form action="action.php" method="post">
			 <p>Votre identifiant : <input type="text" name="id" /></p>
			 <p>Votre mot de passe : <input type="password" name="mdp" /></p>
			 <p><input type="submit" value="OK"></p>
			</form>
			
			<?php
			// Gestion de la connexion SQL (avec ma méthode personnalisée)
			$base    = "integrationcontinue";
			$serveur = "localhost";
			$login   = "root";
			$passe   = "";

			// Connexion
			$link = new mysqli($serveur, $login, $passe, $base);

			// En cas d'erreur
			if (mysqli_connect_error()) {
				die('Connexion impossible à Mysql ('.mysqli_connect_errno().') : '.mysqli_connect_error());
			}
			else{
			die('Connexion à la base de donnée reussi');
			}



			?>

	
    </body>

</html>