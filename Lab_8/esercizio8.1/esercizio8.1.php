<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name = 'author' content = 'Sofia Lucca'>
        <meta name = 'description' content= 'Esercizio 8.1'>

        <title>Esercizio 8.1</title>
    </head>
    <body>
        <?php
        // $valoreInput = $_GET['inputUtente'];
        $valoreInput = $_POST['inputUtente'];
        echo( "<h1>Testo ricevuto</h1>\n");
        echo("<p>{$valoreInput}</p>\n");
        ?>
    </body>
</html>