<!DOCTYPE html>
<html lang="fr">
	<title>Suppression du film</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="../vod/style/style.css" rel="stylesheet" type="text/css" />
	<body>
	<?php
		
		$unFilm = $_POST["nomTitre"];
		$listeFilm = fopen("../vod/data/vod.csv", "a");
		foreach($listeFilm as $n => $unFilm){
			list($nomTitre, $date, $nomRealisateur) = explode(":", $unFilm);
			if trim($nomTitre) == trim($_POST["nomTitre"])){
				unset($listeFilm[array_search($unFilm, $listeFilm);
			}
		}
        fclose($listeFilm);
        
		echo "Ce film a été supprimé de la liste des films proposés en VOD." 

	?>
	<ul class="navbar">
	<li><a href="vod.html">Retour à l'acceuil</a></li>
	</ul>
  </body>
</html>
