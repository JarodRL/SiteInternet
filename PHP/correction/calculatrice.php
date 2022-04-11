<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculatrice</title>
    </head>
    <body bgcolor="yellow" text="blue">
        <h1>
            <font color="black">Calculatrice 4 operations</font>
        </h1>
        <br>
        <img src="Image/calculatrice.jpg" width=120 height=86/>
        <form method="post" action="calculatrice_4_operations.php">
            <p>
                <input type="text" name="first"/>
                <select name="op">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mul">*</option>
                    <option value="divide">/</option>
                </select>
                <input type="text" name="second"/>
                <button>=</button>
            </p>
        </form>
    </body>
</html>