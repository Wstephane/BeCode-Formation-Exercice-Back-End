<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Exercice PDO</title>
	</head>
	<body>
		<?php
			try
			{
				// On se connecte à MySQL
				$bdd=new PDO('mysql:host=mysqldb;dbname=weather-app;charset=utf8','root','root');
			}
			catch(Exception $e)
			{
				// En cas d'erreur, on affiche un message et on arrête tout
					die('Erreur : '.$e->getMessage());
			}

			$resultat = $bdd->query('SELECT * FROM Météo');
		?>

			<table>
				<tr>
					<td>Ville</td>
					<td>Haut</td>
					<td>Bas</td>
				</tr>

			<?php foreach ($resultat > fetch() as $donnee) {} ?>
				<tr>
					<td><?php echo $donnee['ville']; ?></td>
					<td><?php echo $donnee['haut']; ?></td>
					<td><?php echo $donnee['bas']; ?></td>
				</tr>

			<?php $resultat->closeCursor(); ?>

	</body>
</html>