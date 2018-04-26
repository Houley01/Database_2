<?php
  session_start();
  include '_Connection.php';
  include '../Control/Clean_Input.php';
  // Getting the input from the form, and Clean the data Sent In from the user
  $BookTitle = filter_var(clean($_POST['BookTitle']), FILTER_SANITIZE_STRING);
  $YOP = filter_var(clean($_POST['YearOfPublication']), FILTER_SANITIZE_STRING);
  $Gener = filter_var(clean($_POST['Genre']), FILTER_SANITIZE_STRING);
  // If the Form Felid Is empty Put in php File option
  if( empty($_POST['Millions_Sold']) ) {
    $BooksSold = 0;
  } else {
    $BooksSold = filter_var(clean($_POST['Millions_Sold']), FILTER_SANITIZE_STRING);
  }
  // If the Form Felid Is empty Put in php File option
  if( empty($_POST['Language_Written_In']) ) {
    $Language = 'Unknown';
  } else {
    $Language = filter_var(clean($_POST['Language_Written_In']), FILTER_SANITIZE_STRING);
  }
  $BookID = filter_var(clean($_POST['BookID']), FILTER_SANITIZE_STRING);
  $BookCover = filter_var(clean($_POST['BookCover']), FILTER_SANITIZE_STRING);

  // If Button Update is Clicked, Do This.
  if ($_POST['EditButton'] === 'Updated') {
    try {
      $conn = dbConnect();
      // Update Book With The ID = to the BookID in the Modal
      $AlterTable = "UPDATE `book` SET `BookTitle` = :BookTitle, `YearofPublication` = :YOP , `Genre` = :Gener , `MillionsSold` = :BooksSold , `LanguageWritten` = :Language , `Cover` = :BookCover  WHERE book.BookID = :BookID;";
      $stmt = $conn->prepare($AlterTable);
      $stmt->bindParam(':BookID', $BookID);
      $stmt->bindParam(':BookTitle', $BookTitle);
      $stmt->bindParam(':YOP', $YOP);
      $stmt->bindParam(':Gener', $Gener);
      $stmt->bindParam(':BooksSold', $BooksSold);
      $stmt->bindParam(':Language', $Language);
      $stmt->bindParam(':BookCover', $BookCover);
      $stmt->execute();
      // Inserts into the Modifyed table, After the book has been updated.
      $modify = "INSERT INTO `modify` (`ModifyID`, `ModifyDate`, `BookID`, `UserID`) VALUES (NULL, CURRENT_DATE, '".$BookID."', '".$_SESSION['UserID']."'); ";
      $stmt = $conn->prepare($modify);
      $stmt->execute();
      header('location: ../View');
      echo "Success";
    } catch (\Exception $e) {
      echo "Error: " . $e->getMessage();
      echo "<br/>";
    }
  }
  // If Button Delete is Clicked, Do This.
  if ($_POST['EditButton'] === 'Delete') {
    try {
      $conn = dbConnect();
      // Delete Book With The ID = to the BookID in the Modal
      $DeleteBook = "DELETE FROM `book` WHERE `book`.`BookID` = :BookID;";
      $stmt = $conn->prepare($DeleteBook);
      $stmt->bindParam(':BookID', $BookID);
      $stmt->execute();
      header('location: ../View');
      echo "Book Removed";
    } catch (\Exception $e) {
      echo "Error: " . $e->getMessage();
      echo "<br/>";
    }
  }
?>
