<?php
  session_start();
  if (isset($_SESSION['zalogowany'])) {

    $_SESSION = array();


    if (isset($_COOKIE[session_name()])) {      setcookie(session_name(), '', time() - 3600);    }

 
    session_destroy();
  }


  setcookie('zalogowany', '', time() - 3600);
  setcookie('zalogowany', '', time() - 3600);

  $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/main.php';
  header('Location: ' . $home_url);
?>
