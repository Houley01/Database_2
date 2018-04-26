<?php
  session_start();
// Removes all Session Information About User Settings
  unset($_SESSION['error']);
  unset($_SESSION['UserID']);
  unset($_SESSION['FName']);
  $_SESSION['UserStatus'] = 0;
  header('Location: ../view/index.php');
?>
