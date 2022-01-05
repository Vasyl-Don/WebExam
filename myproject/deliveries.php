<?php
  require_once 'connect.php';
  $sql = "SELECT deliveries.DeliveryID, deliveries.DeliveryDate, items.ItemName, deliveries.Quantity
FROM deliveries inner join items ON deliveries.ItemID = items.ItemID ORDER BY DeliveryDate";
  $storage = mysqli_query($connect, $sql);
  $storage = mysqli_fetch_all($storage);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet">
        <title>Deliveries</title>
    </head>
    <body>
        <div class="menu">
            <button onclick="document.location='index.php'">Наявні товари</button>
            <button onclick="document.location='deliveries.php'">Поставки</button>
            <button onclick="document.location='departure.php'">Відправки</button>
        </div>
        <div class="login">
            <button onclick="document.location='authorization.php'">Увійти</button>
        </div>
        <span class = "UserName">
            <?php
                $file = fopen("Id.txt", "r+");
                echo file_get_contents("Id.txt");
                fclose($file);
            ?>
        </span>
        <br>
        <h1>Поставки</h1>
        <button onclick="document.location='delivery_creation.php'">Створити поставку<br>(лише для авторизованих користувачів)</button>
        <br><br><br>
        <table>
            <tr>
                <th>ID поставки</th>
                <th>Дата</th>
                <th>Товар</th>
                <th>Кількість</th>
            </tr>
            <?php
                foreach($storage as $key) {
             ?>
                <tr>
                    <td><?= $key[0]?></td>
                    <td><?= $key[1]?></td>
                    <td><?= $key[2]?></td>
                    <td><?= $key[3]?></td>
                </tr>
                <?php
            }
                 ?>
        </table>
    </body>
</html>
