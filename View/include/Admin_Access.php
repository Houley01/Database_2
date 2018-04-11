<?php
  //Every Admin Page needs to have this file include to stop people from accessing admin files
  session_start();
  include 'header.php';
  switch ($_SESSION['UserStatus']) {

    case 1:
      include 'include/Admin_Nav.php';
      include 'include/Admin_Modal.php';
      break;

    default:
      header('location: index.php');
      break;
  }
  ?>
