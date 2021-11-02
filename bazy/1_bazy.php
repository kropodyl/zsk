<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>uzytkownicy</title>
  </head>
  <body>
    <h4>uzytkownicy</h4>
      <?php
        $connect = new mysqli("localhost","root","","zsk_4cg2_baza1");

        $sql = "SELECT * FROM `users`";
        $result = $connect->query($sql);
        // print_r($result);

        while ($rows = $result->fetch_assoc()) {
          echo<<<ROW
          Id: $rows[id]<br>
          Imie: $rows[name]<br>
          Nazwisko: $rows[surname]<br>
          Rok: $rows[birthday]

          <hr>
ROW;
        }


       ?>
  </body>
</html>
