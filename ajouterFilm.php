<!DOCTYPE html>
<html lang="fr">
	<title>Ajout du film</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="../vod/style/style.css" rel="stylesheet" type="text/css" />
    <body>
    <?php

        $unFilm = "\n".$_POST["nomTitre"].":".$_POST["date"].":".$_POST["nomRealisateur"];
        $listeFilm = fopen("../vod/data/vod.csv", "a");
        fwrite($listeFilm, $unFilm);
        fclose($listeFilm);
        echo "Le film ",$_POST["nomTitre"], ", daté de ",$_POST["date"], " et realisé par ",$_POST["nomRealisateur"], " a été ajouté à la liste des films proposés en VOD.";
    ?> 
    
	<ul class="navbar">
		<li><a href="vod.html">Retour à l'acceuil</a></li>
	</ul>
    </body>
</html>
