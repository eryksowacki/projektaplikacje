<?php
    session_start();

    $_SESSION['zalogowany'] = false;
 
    require_once "connect.php";

            $login = $_POST['login'];
            $password = $_POST['password'];
            $ip = $_SERVER['REMOTE_ADDR'];

            $passwd = md5($password);
  
              if(!$connect->connect_errno) {

              $sql = "SELECT `login`,`haslo`,count(*) as `loginsfound` from `clients` where `login` = '$login'";
              $result = $connect -> query($sql);
              $rows = mysqli_fetch_array($result, MYSQLI_ASSOC); 

              $found = $rows['loginsfound'];

              if($found == 1){
        
              if($rows['haslo'] == $passwd){

              $sql = "UPDATE `clients` SET (`logowanie` = '".time().", `ip` = '".$ip."'') WHERE `login` = '".$login."';";
  
              $_SESSION['zalogowany'] = true;

              header('Location: ./main.php');
              } else {
                echo "<script>history.back(alert('Nieprawidłowe hasło!'))</script>";
              }
            } else {
              echo "<script>history.back(alert('Nieprawidłowy login!'))</script>";
       }
     } else {
            echo "Błędne połączenie z bazą danych!";
          }
?>