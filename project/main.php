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
          <h3>Strona Główna</h3>

          <img src="./10.jpg">

          <br>  

          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nulla in lacus placerat turpis facilisis faucibus. 
          Morbi vitae ornare enim, in imperdiet libero. 
          Suspendisse mollis lobortis elit vel blandit. 
          Vivamus libero augue, mattis quis molestie sit amet, luctus a sem. 
          Pellentesque at quam efficitur, cursus nulla eu, efficitur mauris.
          Fusce porttitor, enim et mollis accumsan, enim risus lacinia felis, in semper purus metus non urna. 
          Maecenas hendrerit luctus massa.
      
      </div>

    </div>
      <div class="footer">
        Autor: Eryk Sowacki | Copyright © | ZSŁ POZNAŃ 2021 PROJEKT APLIKACJE
      </div>

    </div>

  </body>
</html>
