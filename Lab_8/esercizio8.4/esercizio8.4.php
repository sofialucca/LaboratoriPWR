<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="author" content = "Sofia Lucca">
        <meta name="description" content = "Esercizio 8.4">

        <title>Esercizio 8.4</title>
    </head>
    <body>
        <?php
            // $nome = $_GET['nomeProdotto'];
            // $prezzo = (double) $_GET['prezzoProdotto'];
            // switch ($_GET['aliquota']){
            $nome = $_POST['nomeProdotto'];
            $prezzo = (double) $_POST['prezzoProdotto'];
            switch ($_POST['aliquota']){
                case "minima":
                    $iva = 0.04;
                    break;
                case "ridotta":
                    $iva = 0.1;
                    break;
                case "ordinaria":
                    $iva = 0.22;
                    break;
                default:
                    alert("ERRORE");
                    break;
            }
            $prezzoTotale = round($prezzo+($prezzo*$iva),2);
            echo "<h1>Risultato</h1>\n";
            echo "<p>$nome costa: $prezzoTotale Euro</p>"
            
        ?>
</body>
</html>