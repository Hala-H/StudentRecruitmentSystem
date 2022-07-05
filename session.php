<?php
  session_start();
  if( !isset($_SESSION['userEmail']) )
    header('Location: login.php');
  $minutesBeforeSessionExpire=30;
  if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > ($minutesBeforeSessionExpire*60))) {
      session_unset();
      session_destroy();
      header('Location: login.php');
  }
  $_SESSION['LAST_ACTIVITY'] = time();
?>
