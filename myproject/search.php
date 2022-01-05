<?php
  require_once 'config/connect.php';
  $findID = $_POST['findID'];

  $sql = "SELECT personinfo.PersonID, personinfo.FullName, personinfo.Profession, numbers.Number, numbers.Operator FROM personinfo INNER JOIN numbers ON personinfo.PersonID = numbers.PersonID WHERE personinfo.PersonID = $findID";
  $personinfo = mysqli_query($connect, $sql);
  $personinfo = mysqli_fetch_all($personinfo);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Telephone book</title>
        <style>
        table, th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
  </head>
  <body>
    <table>
      <tr>
        <th>PersonID</th>
        <th>FullName</th>
        <th>Profession</th>
        <th>PhoneNumber</th>
        <th>Operator</th>
      </tr>
      <?php
        foreach ($personinfo as $key ) {
          ?>
          <tr>
            <td><?= $key[0] ?></td>
            <td><?= $key[1] ?></td>
            <td><?= $key[2] ?></td>
            <td><?= $key[3] ?></td>
            <td><?= $key[4] ?></td>
          </tr>
          <?php
        }
      ?>
    </table>
  </body>
</html>