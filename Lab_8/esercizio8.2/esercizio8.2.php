<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Sofia Lucca">
        <meta name = "description" content = "Esercizio 8.2">

        <title>Esercizio 8.2</title>
    </head>
    <body>
        <?php
            // $num1 = (int) $_GET['n1'];
            // $num2 = (int) $_GET['n2'];
            $num1 = (int) $_POST['n1'];
            $num2 = (int) $_POST['n2'];
            $somma = $num1 + $num2;
            echo("<h1>Risultato somma</h1>\n
            <p>{$num1} + ({$num2}) = {$somma}</p>\n
            <p><a href='esercizio8.2.html'>Torna alla pagina iniziale</a></p>\n");
        ?>
    </body>
</html>