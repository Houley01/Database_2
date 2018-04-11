<?php
  session_start();
  include '_Connection.php';

  $AddBook_sql = "INSERT INTO book (BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, AuthorID)
  VALUES
  (NULL, '" . $_POST['Book_Title'] . "' ,  '" . $_POST['Original_Title'] . "' , '" . $_POST['Year_Of_Publication'] . "' , '" . $_POST['Genre'] . "' , '" . $_POST['Millions_Sold'] . "' , '" . $_POST['Language_Written_In'] . "' , '" . $_POST['Author'] . "'  );";

  print_r($AddBook_sql);
  die();

  $conn = dbConnect();
  $stmt = $conn->prepare($JobRequest_sql);
  $stmt->execute();
  header('location: ../View/Success_Page.php');
 ?>
