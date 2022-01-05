<?php
  require_once 'connect.php';
  $DeliDate = $_POST['DeliDate'];
  $ItemID = $_POST['ItemID'];
  $Quantity = $_POST['quantity'];

  mysqli_query($connect, "INSERT INTO deliveries (DeliveryDate, ItemID, Quantity) VALUES ('$DeliDate', '$ItemID', '$Quantity')");
  mysqli_query($connect, "UPDATE storage SET Quantity = Quantity + '$Quantity' WHERE ItemID = '$ItemID'");

  header('Location: deliveries.php');
?>
