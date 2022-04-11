<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Né(e) quel jour ?</title>		
		<link rel="stylesheet" href="ne_e_quel_jour.css">
	</head>
	<body>
	
	<h1>Quel jour de la semaine êtes-vous né(e) ?</h1>
	
	<?php
			$prenom = $_POST['prenom'];
			$d = $_POST['jour_du_mois'];
			$m = $_POST['mois'];
			$y = $_POST['annee'];			
			
			if ($m < 3)
					{	$z = $y - 1; 
						$jour_num = ((int)((23 * $m)/9) + $d + 4 + $y + (int)($z/4) - (int)($z/100) + (int)($z/400) ) % 7;						
					}
			else {	$z = $y;
					$jour_num = ((int)((23 * $m)/9) + $d + 4 + $y + (int)($z/4) - (int)($z/100) + (int)($z/400) - 2 ) % 7;
					}		
					
			print("<h2>$prenom, vous êtes né(e) un ");
			if ($jour_num == 0)
				{print ("dimanche.");						 										
				}
				
			if ($jour_num == 1)
				{print ("lundi.");						 										
				}
				
			if ($jour_num == 2)
				{print ("mardi.");						 										
				}
			
			if ($jour_num == 3)
				{print ("mercredi.");						 										
				}
				
			if ($jour_num == 4)
				{print ("jeudi.");						 										
				}
				
			if ($jour_num == 5)
				{print ("vendredi.");						 										
				}
				
			if ($jour_num == 6)
				{print ("samedi.");						 										
				}
			print("</h2>");
	?>
	<form name="form_retour" action="ne_e_quel_jour.html" method="post">
	<input type="submit" value="Retour" />
	</form>
	</body>
</html>