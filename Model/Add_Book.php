<?php
  session_start();
  include '_Connection.php';
  $OTitle = $_POST['Original_Title'];
  if( empty($_POST['Book_Title']) ) {
    $BookTitle = $OTitle;
} else {
    $BookTitle = $_POST['Book_Title'];
}
  $YOP = $_POST['Year_Of_Publication'];
  $Gener = $_POST['Genre'];
  if( empty($_POST['Millions_Sold']) ) {
    $BooksSold = 0;
} else {
    $BooksSold = $_POST['Millions_Sold'];
}
if( empty($_POST['Language_Written_In']) ) {
  $Language = 'Unknown';
} else {
  $Language = $_POST['Language_Written_In'];
}
  $Author = $_POST['Author'];

  $AddBook_sql = "INSERT INTO book (BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten, AuthorID)
  VALUES
  (NULL, '" . $BookTitle . "' ,  '" . $OTitle . "' , '" . $YOP . "' , '" . $Gener . "' , '" . $BooksSold . "' , '" . $Language . "' , '" . $Author . "'  );";

 print_r($AddBook_sql);
  // die();

  $conn = dbConnect();
  $stmt = $conn->prepare($AddBook_sql);
  $stmt->execute();
  header('location: ../View/');
 ?>
