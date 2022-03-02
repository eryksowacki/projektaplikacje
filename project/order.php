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
        <a href="./actual.php">
          <div class="actual">
           Strona Główna
          </div>
        </a>
      </td>

      <td>
        <a href="./offer.php">
          <div class="actual">
             Aktualności
          </div>
        </a>
      </td>

      <td>
        <a href="./kadra.php">
          <div class="actual">
             Oferta
          </div>
        </a>
      </td>

      <td>
        <a href="./camps.php">
          <div class="actual">
            Kadra
          </div>
        </a>
      </td>

      <td>
        <a href="./gallery.php">
          <div class="actual">
             Obozy jeździeckie
          </div>
        </a>
      </td>

      <td>
        <a href="./achievements.php">
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
          <h3>Finalizacja rezerwacji</h3>

        <?php 
            
        require_once "connect.php";

                  $day = $_SESSION['data'];
                  $hour = $_SESSION['godzina'];
                  $instructor = $_SESSION['instruktor'];
                 
            
              if (!$connect->connect_errno) {
                  if(!empty($day || $hour || $instructor)){

                      $sql = "INSERT INTO `reservations` (`data`, `godzina`, `intruktor`) VALUES ('$day','$hour', '$instructor')";
            
                      $result = $connect -> query($sql);

                      echo "<script> alert('Rezerwacja przebiegła pomyślnie! Skontaktujemy się telefonicznie by potwierdzić trening')</script>";
                    

                    } else {
            
                    echo "<script> alert('Nie udało się zarezerwować')</script>";
                    
                
            }
        }
              $connect->close();
              
            ?>
        

            <br><br><br><br>
          <form action="order.php" method="POST">
            <input type="submit" name="submit" value="Zamów trening">
          </form>

              <br><br><br><br>
          <a href="main.php">
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