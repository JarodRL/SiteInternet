<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
    <body bgcolor="yellow" text="blue">
        <h1>
            <font color="black">Calculatrice 4 operations, résultat:</font>
        </h1>

        <h2>
            <?php
                $option = isset($_POST['op']) ? $_POST['op'] : false;
                if($option) {
                    $first = $_POST['first'];
                    $second = $_POST['second'];

                    switch($option) {
                        case "divide":
                            echo "$first / $second" . " = " . $first / $second;
                        break;

                        case "add":
                            echo "$first + $second" . " = " . $first + $second;
                        break;

                        case "sub":
                            echo "$first - $second" . " = " . $first - $second;
                        break;

                        case "mul":
                            echo "$first * $second" . " = " .  $first * $second;
                        break;
                    }
                } else {
                    exit("An operator is required");
                }
            ?>
        </h2>
    </body>
</html>
