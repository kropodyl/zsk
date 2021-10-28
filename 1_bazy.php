<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli('localhost',"root", "",'users'); //localhost bo tak potem roota i hasło do roota i nazwa bazy danych
    $sql = "SELECT * FROM `users`;";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()) {
      echo $row['name'];
      echo <<< ROW
      Id: $row[id]<br>
      Imię i nazwisko: $row[name] $row[surname]<br>
      Data urodzenia: $row[birthday]<hr>
ROW;
    }
    $connect->close();
    ?>
  </body>
</html>
