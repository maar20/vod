<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Films en VOD</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="../vod/style/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
	  <h3>Liste des films proposés en VOD</h3>
      <table>
          <thead>
              <tr>
                  <td><b>Titre</b></td>
                  <td><b>Année</b></td>
                  <td><b>Réalisateur</b></td>
              </tr>
          </thead>
          <tbody>
            <?php
            $path = "../vod/data/vod.csv" ;
            $listeFilm = file($path);
            
            foreach($listeFilm as $n => $unFilm){
                list($nomTitre, $date, $nomRealisateur) = explode(":", $unFilm);
            ?>
                <tr>
                    <td><?php echo $nomTitre ?></td>
                    <td><?php echo $date ?></td>
                    <td><?php echo $nomRealisateur ?></td>
                </tr>
            <?php
            }
            ?>
          </tbody>
      </table>
	  <ul class="navbar">
		<li><a href="vod.html">Retour à l'acceuil</a></li>
	  </ul>
  </body>
</html>
