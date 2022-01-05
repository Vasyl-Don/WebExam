<?php
  require_once 'connect.php';
  $DepartDate = $_POST['DepartDate'];
  $ItemID = $_POST['ItemID'];
  $Quantity = $_POST['quantity'];

  mysqli_query($connect, "INSERT INTO departure (DepartureDate, ItemID, Quantity) VALUES ('$DepartDate', '$ItemID', '$Quantity')");
  mysqli_query($connect, "UPDATE storage SET Quantity = Quantity - '$Quantity' WHERE ItemID = '$ItemID'");

  header('Location: departure.php');
?>
