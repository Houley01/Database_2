<?php
include 'include/header.php';
include '../Model/_Session.php';

 // If User = 0 Amoumus show Login_Nav.php = include 'include/Login_nav.php';
 // If User = 0 Amoumus show include 'include/Login_Body.php';
 //
 // If User = 1 Show staff Staff_Nav.php = include 'include/Staff_Nav.php';
 // If User = 1 Show Staff_Body.php  = include 'include/Staff_Body.php';
 //
 // If User = 2 show admin Admin_Nav.php = include 'include/Admin_nav.php';
 // If User = 2 show Admin_Body.php = include 'include/Admin_Body.php';

switch ($_SESSION['UserStatus']) {
  case 0:
    include 'include/Login_Nav.php';
    include 'include/Login_Body.php';
    include 'include/Login_Modal.php';
    break;

  case 1:
    include 'include/Admin_Nav.php';
    include 'include/Admin_Body.php';
    include 'include/Admin_Modal.php';
    break;

  default:
    include 'include/Login_Nav.php';
    include 'include/Login_Body.php';
    include 'include/Login_Modal.php';
    break;
}
 ?>

 <?php
 include 'include/footer.php';
  ?>



</div>
