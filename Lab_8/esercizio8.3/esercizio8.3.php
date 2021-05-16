<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name = 'author' content="Sofia Lucca">
        <meta name = 'description' content="Esercizio 8.3">
        <title>Esercizio 8.3</title>
    </head>
    <body>
        <?php
            // $numero = $_GET["menu"];
            $numero = $_POST["menu"];
            echo("<table>\n
            <thead>\n
            <tr>\n
                <th>NUMERO</th>\n
                <th>N^2</th>\n
                <th >N^3<th>\n</tr>\n
                </thead>\n<tbody>\n");
            for($i=1;$i<=$numero;$i++){
                $quadrato = $i*$i;
                $cubo = $quadrato*$i;
                echo("<tr>\n
                <td>{$i}</td>\n
                <td>{$quadrato}</td>\n
                <td>{$cubo}</td>\n
                </tr>\n");
            }
            echo("</tbody>\n</table>");
            ?>
</body>
</html>