<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Votre jour de naissance</title>
</head>
<body>
    <?php
        $name = isset($_POST['prénom']) ? $_POST['prénom'] : false;
        $d = $_POST['jour'];
        $m = $_POST['mois'];
        $y = $_POST['année'];

        $c = (14 - $m) / 12;
        $a = $y - $c;

        $j = ($d + $a + $a / 4 - $a / 100 + $a / 1400 + (31 * $m) / 12) % 7;
        switch($j) {
            case 1:
                print("Vous êtes né un lundi!");
            break;

            case 2:
                print("Vous êtes né un mardi!");
            break;

            case 3:
                print("Vous êtes né un mercredi!");
            break;

            case 4:
                print("Vous êtes né un jeudi!");
            break;

            case 5:
                print("Vous êtes né un vendredi!");
            break;
            
            case 6:
                print("Vous êtes né un samedi!");
            break;

            case 7:
                print("Vous êtes né un dimanche!");
            break;
        }
    ?>
</body>
</html>