<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <form action="" method="get">
        
            <input type="text" name="text" placeholder="getal tussen 0 en 10 in">

            <input id="send" name="send" type="submit" value="submit">

        </form>

        <?php
        function countDown($n) {
            for ($i = $n; $i > 0; $i--)
            echo "$i <br>";
        }

        if (isset($_GET["text"])) {
            try {
                if (is_numeric($_GET["text"]) && $_GET["text"] > 0 && $_GET["text"] < 10) {
                    countDown($_GET["text"]);
                }
                else if (!is_numeric($_GET["text"])) {
                    throw new Exception('is geen getal');
                }
                elseif ($_GET["text"] <= 0) {
                    throw new Exception('kan niet lager tellen');
                }
                elseif ($_GET["text"] > 10) {
                    throw new Exception('getal is te groot');
                }  
                else {
                    throw new Exception('er is iets mis gegaan');
                }      
            } 
            catch (exception $ex) {
                echo "ERROR: ". $ex -> getMessage();
            }
        }

        ?>

    </body>
</html>