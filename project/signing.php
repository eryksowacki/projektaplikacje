<?php
  session_start();
  
  if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==true) {
    header('Location: main.php');
  } else {
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
        <a href="./logout.php">
        <div class="actual">
        Logowanie
        </div>
          </a>
        </td>
       
           

        </table>

      </div>
    <div class="background">
      <div class="mainpage">
        <h3>Logowanie</h3>

        <br><br>

        <form action="login.php" method="post">

        <b>Login:</b>
        <input type="text" name="login" placeholder="Wprowadź login">

        <br>

        <b>Hasło:</b>
        <input type="password" name="password" placeholder="Wprowadź hasło">

        <br>

        <input type="submit" name="submit" value="Zaloguj" name="loguj">

        <br><br>

          Nie masz konta?
        <a href="./registered.php">Zarejestruj się</a>
        <br><br><br>

        </form>

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
  }

WEB;
  }
?>