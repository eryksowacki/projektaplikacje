<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Stajnia "Jeździectwo" Poznań </title>
  </head>
  <body>

    <link rel="stylesheet" href="./style.css" type="text/css">
    <script src="./slider.js">

    </script>

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
        <h3>Aktualności</h3>
        <br>

          <a href="./mp.php">
            <div class="slideshow-container">
                <div class="mySlides fade" style="display: block;">
                <img src="./6.jpg">
                <div class="text">Zwycięstwo w Mistrzostwach Polski skoków</div>
            </div>
          </a>

          <a href="offer.php">
            <div class="mySlides fade">
              <img src="./4.jpg">
              <div class="text">Zapisy na obozy jeździeckie lato 2021</div>
            </div>
          </a>

          <a href="box.php">
            <div class="mySlides fade">
              <img src="./5.jpg">
              <div class="text">Wolne boksy w pensjonacie "Stajnia" </div>
            </div>
          </a>


            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
        <br>


            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>

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
