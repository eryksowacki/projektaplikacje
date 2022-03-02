<?php
  session_start();
  require_once './connect.php';

  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      echo "<script> alert('Wypełnij wszystkie dane!')</script>";
      echo "<script>history.back()</script>";
      exit();
    } else {
      $login = $_POST['login'];
      $password1 = $_POST['password'];
      $password2 = $_POST['passwd'];
      $email = $_POST['email'];
      $ip = $_SERVER['REMOTE_ADDR'];
    }
  }

  if (!$connect->connect_errno) {
    if($password1 == $password2) {

          $sql = "INSERT INTO `clients` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`) VALUES ('$login','".md5($password1)."','$email', '".time()."', '".time()."', '".$ip."')";

          $result = $connect -> query($sql);

          echo "<script> alert('Rejestracja przebiegła pomyślnie!')</script>";

        } else 

        echo "<script> alert('Hasła nie są takie same!')</script>";

    }
  $connect->close();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
  </head>
  <body>

    <link rel="stylesheet" href="./style.css" type="text/css">

    <?php
      require_once './connect.php';
    ?>

    <div id="container">

      <div class="header">
      </div>

      <div class="navi">

        <table>

        <td>
          <a href="./main.php">
            <div class="actual">
             Strona Główna
            </div>
          </a>
        </td>

        <td>
          <a href="./actual.php">
            <div class="actual">
               Aktualności
            </div>
          </a>
        </td>

        <td>
          <a href="./offer.php">
            <div class="actual">
              Oferta
            </div>
          </a>
        </td>

        <td>
          <a href="./kadra.php">
            <div class="actual">
              Kadra
            </div>
          </a>
        </td>

        <td>
          <a href="./camps.php">
            <div class="actual">
               Obozy jeździeckie
            </div>
          </a>
        </td>

        <td>
          <a href="./contact.php">
            <div class="actual">
               Kontakt
            </div>
          </a>
        </td>

        <td>
        <?php
              if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==true) {
                echo <<< WY
                <a href="./logout.php">
                <div class="actual">
                Wyloguj
              
WY;
              } else {
                echo <<< LO
                <a href="./signing.php">
                <div class="actual">
                Logowanie
              
LO;
              }
          ?>
            </div>
          </a>
        </td>

        </table>

      </div>
    <div class="background">
      <div class="mainpage">
        <br><br><br><br>
          <a href="signing.php">Powrót do logowania</a>
        <br><br><br><br><br><br>
        <a href="./main.php">
          Powrót do strony głównej
        </a>
      </div>

    </div>
      <div class="footer">
        Autor: Eryk Sowacki | Copyright © | ZSŁ POZNAŃ 2021 PROJEKT APLIKACJE
      </div>

    </div>

  </body>
</html>
