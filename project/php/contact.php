<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
    <link rel="stylesheet" href="../style/style.css">
  </head>
  <body>

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
        <h3>Kontakt z nami:</h3>
        <br><br>
        <a href="./main.php">

          <b>Numer telefonu: </b> 123456789
          <br>
          <b>E-mail:</b> biurostajnia.poznan@stajnia.pl
          <br>
          <b>Adres:</b> ul. Kotowo 28A Poznań
          <br>
          <b>Kod pocztowy:</b> 123-45

          <br><br><br><br>

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