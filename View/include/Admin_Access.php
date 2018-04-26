<?php
  //Every Admin Page needs to have this file include to stop people from accessing admin files
  session_start();
  include 'header.php';
  switch ($_SESSION['UserStatus']) {
    //If User Status = 1 then continue
    case 1:
      include 'include/Admin_Nav.php';
      break;
    // Anything else redirect to index
    default:
      header('location: index.php');
      break;
  }
  ?>
