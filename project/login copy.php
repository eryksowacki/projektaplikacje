<?php
    session_start();

    $_SESSION['zalogowany'] = false;
 
    require_once "connect.php";

            $login = $_POST['login'];
            $password = $_POST['password'];
            $ip = $_SERVER['REMOTE_ADDR'];

            $passwd = md5($password);
    
          

          if(!$connect->connect_errno) {

            $sql = "SELECT * FROM `clients`";
       
            $result = $connect -> query($sql);

          } else {

            echo "Błędne połączenie z bazą danych!";
          }

        while($clients = $result -> fetch_Assoc()){
        
            if($login == "$clients[login]" && $passwd == "$clients[haslo]" ) {
          
            $_SESSION['zalogowany'] = true;
            $_SESSION['login'] = $login;

             $sql = "UPDATE `clients` SET (`logowanie` = '".time().", `ip` = '".$ip."'') WHERE `login` = '".$login."';";

            header('Location: ./main.php');
          } else {
            echo "Nieprawidłowy login lub hasło";
            //$_SESSION['zalogowany'] = false;
            //header('Location: signing.php');
  }
 }
?>