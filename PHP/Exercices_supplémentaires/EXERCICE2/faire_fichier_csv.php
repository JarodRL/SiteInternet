<html>
		<head>
				<title>Generer un fichier .csv en PHP</title>
		</head>	
		<body bgcolor="yellow" text="blue">
				<h2>
				<SCRIPT LANGUAGE="php">
					// Creation et ouverture d'un fichier .csv en ecriture seulement ("w")
					// La variable $handle permettra de faire reference a ce fichier par la suite.
					$handle = fopen('commande.csv', "w");
					
					// Ecriture dans le fichier des entetes de colonnes
					fprintf($handle, "Article;Quantite;Prix unitaire;Total Article\n");
					
					// Ecriture dans le fichier d'un premier article, commande de 12 huitres a 1.64 E piece
					$article = "huitre"; $quantite = 12; $prix_unitaire = 1.64;
					$tot_article = $quantite * $prix_unitaire;
					fprintf($handle, "$article;$quantite;$prix_unitaire;$tot_article\n");
					
					// On referme le fichier apres son utilisation
					fclose($handle);
				</SCRIPT>
				</h2>
				<h1><font color="black">Fichier .csv genere.</font></h1>								
		</body>
</html>