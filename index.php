<!DOCTYPE html>
<html>
<head>
	<title>Projet - Analyse et Décision en Entreprise (ADE)</title>
	<meta charset="UTF-8" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
</head>
<body>
	<?php
	if(!isset($_GET['part']) OR !in_array($_GET['part'], array("lineaire", "pert")))
	{
		?>
		<h1>Projet - Analyse et Décision en Entreprise (ADE)</h1>
		<p>Le projet est composé de deux parties : </p>
		<p><i class="fas fa-arrow-right"></i> 1)  <a href="index.php?part=lineaire">Résolution d'un modèle linéaire</a></p>
		<p><i class="fas fa-arrow-right"></i> 2) <a href="index.php?part=pert">Étudier un problème lié à la "gestion de projets"</a></p>
		<p><i>Projet réalisé par le binôme suivant : ROSE Maxime & VOLFF Lorris</i></p>		
		<?php
	}
	else
	{
		?>
		<p><a href="index.php">Retour vers l'index</a></p>
		<?php
		

		if($_GET['part'] == "lineaire")
		{
			?>
			<h1>Première partie</h1>
			<h2>Résolution d'un modèle linéaire</h2>
			<p>Dans cette partie, nous nous intéressons à la résolution d'un Programme Linéaire donné sous une forme Canonique (noté PLC). Ensuite, différentes courbes (graphiques), représentant l'évolution du temps d'exécution de l'algorithme en fonction de la taille des données (le nombre de contraintes et/ou le nombre de variables), sont demandées.</p>
			<hr>
			<?php include "PLC.html"; ?>
			<?php
		}

		elseif($_GET['part'] == "pert")
		{
			?>
			<h1>Deuxième partie</h1>
			<h2>Étudier un problème lié à la "gestion de projets"</h2>
			<p>Cette partie s'intéresse à la représentation d'un problème de planification par application de la méthode PERT. On souhaite afficher (visualiser) des étapes/tâches liées au problème avec le calcul des dates au plus tôt, des dates au plus tard, ...</p>
			<hr>
			<?php include "PERT.html"; ?>
			<?php
		}
		?>

		<hr>
		<?php
	}
	?>

</body>
</html>