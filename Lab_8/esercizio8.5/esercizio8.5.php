<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Sofia Lucca">
        <meta name ="description" content = "Esercizio 8.5">
        <title>Esercizio 8.5</title>
    </head>
    <body>
        <?php
                // $nome = $_GET['nomeProdotto'];
                // $prezzo = (double) $_GET['prezzoProdotto'];
                // switch ($_GET['aliquota']){
                $nome = $_POST['nomeProdotto'];
                $prezzo = $_POST['prezzoProdotto'];
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
                        break;
                }
                echo "<h1>Risultato</h1>\n<div>";                
                if(preg_match("/[^a-zA-Z]/",$nome)){
                    echo "<div>ERRORE:il prodotto deve essere una stringa</div>\n";
                }else if(!$nome){
                    echo "<div>ERRORE: bisogna inserire un nome</div>\n";
                }else{
                    echo "<div>Nome del prodotto: {$nome}</div>\n";
                }             
                if(!preg_match("/^\d+(\.|,\d{1,2})?$/",$prezzo)){
                    echo "<div>ERRORE: il costo deve essere un numero intero oppure con massimo due cifre decimali</div>\n";
                    $checkPrezzo = false;

                }else if(!$prezzo){
                    echo "<div>ERRORE: riempire campo prezzo</div>\n";
                    $checkPrezzo = false;
                }
                if(!$iva){
                    echo "<div>ERRORE: selezionre un tipo di aliquota</div>\n";
                    $checkPrezzo = false;
                }
                if(!isset($checkPrezzo)){
                    $prezzo = (float) $prezzo;
                    $prezzoTotale = round($prezzo+($prezzo*$iva),2);
                    echo "<div>Prezzo con iva a {$iva}%: $prezzoTotale Euro</div>";
                }
                echo "</div>";
                
            ?>
        </body>
</html>