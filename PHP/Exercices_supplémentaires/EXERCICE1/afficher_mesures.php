<html>
		<head>
				<title> Domotique </title>
		</head>	
		<body bgcolor="yellow" text="blue">
				<h1> <font color="black">Dernieres donnees recues</font> </h1>				
				<h2>
				<SCRIPT LANGUAGE="php">
					$donnees_recues = file('mesures.txt');
					// la variables $donnees_recues est un tableau dont chaque element contient
					// une ligne du fichier "mesures.txt".
					$temperature = $donnees_recues[0];
					print ("Temperature : $temperature C<BR>");
					if ($temperature < 5)
						print("<img src= 'froid.jpg'/><BR>");
					if (($temperature >= 5) && ($temperature < 20))
						print("<img src= 'nuage.jpg'/><BR>");
					if ($temperature > 20)
						print("<img src= 'soleil.jpg'/><BR>");

					print ("Tension : $donnees_recues[1] V<BR>");
					
					print ("Courant :");
					
					print("<SPAN STYLE='background: red'><FONT SIZE='5'>"); // Couleur rouge	
					$courant = $donnees_recues[2];
					for($i=0; $i<$courant;$i++) // Boucle for: l'entier $i ira de 0 a $courant-1
									 print("-");
					print("</SPAN><BR>");
					if ($courant > 60)
						print("ATTENTION!: le courant sera coupé!");
						
				</SCRIPT>
				</h2>
		</body>
</html>