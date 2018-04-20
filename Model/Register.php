<?php
session_start();
if( empty($_POST['FName']) ) {
  header('location: ../View');
  die();
}
  include '_Connection.php';
  $RFName = $_POST['FName'];
  $RLName = $_POST['LName'];
  $REmail = $_POST['RegisterEmail'];
  $RPassword = $_POST['Register_user_pass'];
  if( empty($_POST['RegisterUserStatus']) ) {
    $RUserStatus = '2';
}
else {
    $RUserStatus = $_POST['RegisterUserStatus'];
}

$Hashed_Password = password_hash($RPassword, PASSWORD_DEFAULT);

$SignUp = "INSERT INTO `user` (`UserID`, `F.Name`, `L.Name`, `Email`, `Password`, `UserStatus`)
VALUES
(NULL,'" .$RFName. "', '" .$RLName. "', '" .$REmail. "', '" .$Hashed_Password. "', '" .$RUserStatus. "');";

$conn = dbConnect();
 $stmt = $conn->prepare($SignUp);
 $stmt->execute();
//
// set
 ?>
