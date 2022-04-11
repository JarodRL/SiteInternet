<html>
               <head>
                               <title>Résultat calcul</title>
               </head>
               <body bgcolor="yellow" text="blue">
                               <h1> <font color="black">Calculatrice 4 operations, le resultat:</font>
                               <h2>
                               <?php

                               $a = $_POST['nbr1'];
                               $b = $_POST['nbr2'];
                               $s = $_POST['signe'];

                               if (strcmp($s, "1") == 0)
                                    {$resultat1 = $a + $b;
                                    print ($resultat1);
                                }
                                if (strcmp($s, "2") == 0)
                                {$resultat2 = $a - $b;
                                print ($resultat2);
                                }
                                if (strcmp($s, "3") == 0)
                                {$resultat3 = $a * $b;
                                print ($resultat3);
                                }
                                if (strcmp($s, "4") == 0)
                                {$resultat4 = $a / $b;
                                print ($resultat4);
                                }
                               ?>
                               </h2>                                                                
               </body>
</html>