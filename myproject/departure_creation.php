<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="stylelogin.css" rel="stylesheet">
        <title>Створити відправлення</title>
    </head>
    <body>
        <form class="" action="create_departure.php" method="post">
            <div class="inputdata">
                <h1>Створення відправлення</h1>
                <span>Дата:</span>
                <input type="date" name="DepartDate">
                <span>ID товару:</span>
                <input type="text" name="ItemID" placeholder="ItemID">
                <span>Кількість:</span>
                <input type="number" name="quantity" placeholder="Quantity">
                <input type="submit" value="Створити відправлення">
            </div>
        </form>
    </body>
</html>
