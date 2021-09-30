<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h3>Kwadrat</h3>
        <form method="post">
            <input type="text" name="a" placeholder="Podaj bok a"><br><br>
            <input type="submit" name="button" value="oblicz">
        </form>
        <?php
            if(!empty($_POST['a'])) {
                $area=pow($_POST['a'], 2);
                $circuit=4*$_POST['a'];
                echo <<< RESULT
                    Obwód kwadratu wynosi: $circuit
                    Pole kwadratu wynosi: $area cm<sup>2</sup><br>
                RESULT;

            }
            else if(isset($_GET['button'])){
                echo "Wypełnij długość boku";
            }
        ?>
    </body>
</html>
