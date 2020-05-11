<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Films en VOD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="../vod/style/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	<?php
  
		$path = "../vod/data/vod.csv" ;
		$listeFilm = file($path);
		$recherche = FALSE ;
	
		foreach($listeFilm as $n => $unFilm){
			list($nomTitre, $date, $nomRealisateur) = explode(":", $unFilm);

			if(strtolower(trim($nomTitre)) == strtolower(trim($_POST["nomTitre"]))){
				echo "Le titre du film est ",$nomTitre," , il est daté de ",$date," et il est réalisé par ",$nomRealisateur,".";
				$recherche = TRUE ;
				break;
			}
			$recherche = FALSE ;
		}

		if(!$recherche){
			echo "Ce film n'est pas rescencé.";
		}

	?>
	<ul class="navbar">
		<li><a href="vod.html">Retour à l'acceuil</a></li>
	</ul>
  </body>
</html>
