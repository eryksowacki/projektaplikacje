<?php
  session_start();

  if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==true) {
    echo <<< WEB
    <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
  </head>
  <body>

    <link rel="stylesheet" href="./style.css" type="text/css">

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
WEB;
?>
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
          <?php
          echo <<< WEB
            </div>
          </a>
        </td>

        </table>

      </div>
    <div class="background">
      <div class="mainpage">
          <h3>Wybór terminu</h3>

          Aktualna data:
WEB;
?>
          <?php
            $date =  date('d-m-Y');
            echo $date;
            
echo <<< WEB
          

          <br><br><br><br>

          <form action="stepsecond.php" method="POST">
            <input type="date" name="date" value="date">
            <br><br><br><br>
            <input type="submit" name="submit" value="Wybór godziny">
          </form>

          <a href="main.php">
            Powrót do strony głównej
          </a>

      </div>
    </div>
      <div class="footer">
        Autor: Eryk Sowacki | Copyright © | ZSŁ POZNAŃ PROJEKT APLIKACJE
      </div>

    </div>

  </body>
</html>
WEB;
            } else {
              header('Location: ./signing.php');
            }
?>

