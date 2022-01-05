<?php
  $connect = mysqli_connect('localhost', 'root', '','storage');
  if(!$connect){
    die('Помилка підключення до БД');
  }
  $ErrorArrays = array ();
  $Login = $_POST['login'];
  $Pass = $_POST['pass'];
  $AllUser = mysqli_query($connect, "SELECT login, password FROM admins");
  $AllUser = mysqli_fetch_all($AllUser);
  $accountfinded = false;
  $UserId;
  $UserName = '';

  foreach ($AllUser as $key) {
    if ($key[1] == $Login && $key[2] == $Pass){
      $accountfinded = true;
      $login = $key[0];
      $password = $key[1];
      $file = fopen("Id.txt", "w+");
      fwrite($file, $login);
      fclose($file);
    }

  }

  if(!$accountfinded){
    $ErrorArrays[] = "account wasn`t found";
  }

  if (count($ErrorArrays) == 0)
    {

      header('Location: ../index.php');
    }
    else
    {
        foreach ($ErrorArrays AS $Errors)
        {
            echo "<font color='red'><b>".$Errors."</font></b><br>";
        }
    }

?>
