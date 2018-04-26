<?php
session_start();
include '../Control/clean_input.php';
if( empty($_POST['FName']) ) {
  header('location: ../View');
}
  include '_Connection.php';
  // Getting the input from the Registeration form, and Clean the data Sent In from the user
  $RFName = filter_var(clean($_POST['FName']), FILTER_SANITIZE_STRING);
  $RLName = filter_var(clean($_POST['LName']), FILTER_SANITIZE_STRING);
  $REmail = filter_var(clean($_POST['RegisterEmail']), FILTER_SANITIZE_STRING);
  $RPassword = filter_var(clean($_POST['Register_user_pass']), FILTER_SANITIZE_STRING);
  // Set A new user to UserStatus 2 until a current Admin to change it to 1
  if( empty($_POST['RegisterUserStatus']) ) {
    $RUserStatus = '2';
  }
  else {
    $RUserStatus = $_POST['RegisterUserStatus'];
  }
  // Hash the User Password enterend after the password has been cleaned
  $Hashed_Password = password_hash($RPassword, PASSWORD_DEFAULT);

  try {
    //INSERT Into user table to sign up the user to become an admin
    $SignUp = "INSERT INTO `user` (`UserID`, `F.Name`, `L.Name`, `Email`, `Password`, `UserStatus`) VALUES (NULL, :FName, :LName, :Email, :Password, :UserStatus);";

    $conn = dbConnect();
    $stmt = $conn->prepare($SignUp);
    $stmt->bindParam(':FName', $RFName);
    $stmt->bindParam(':LName', $RLName);
    $stmt->bindParam(':Email', $REmail);
    $stmt->bindParam(':Password', $Hashed_Password);
    $stmt->bindParam(':UserStatus', $RUserStatus);
    $stmt->execute();

    echo "New records created successfully";
    header('location: ../View');
  }
  catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

?>
