<?php
  session_start();
  include '_Connection.php';
  include '../Control/Clean_Input.php';
  // Gets Information From Form And Clean the User Input
  $OTitle = filter_var(clean($_POST['Original_Title']), FILTER_SANITIZE_STRING);
  // If the Form Felid Is empty Put in php File option 
  if( empty($_POST['Book_Title']) ) {
    $BookTitle = $OTitle;
  } else {
    $BookTitle = filter_var(clean($_POST['Book_Title']), FILTER_SANITIZE_STRING);
  }
  $YOP = filter_var(clean($_POST['Year_Of_Publication']), FILTER_SANITIZE_STRING);
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
    $Author = filter_var(clean($_POST['Author']), FILTER_SANITIZE_STRING);

  try {
    $conn = dbConnect();
    // Add Book Information Into The Books Table
    $AddBook_sql = "INSERT INTO book (BookID, BookTitle, OriginalTitle, YearofPublication, Genre, MillionsSold, LanguageWritten,AuthorID) VALUES (NULL, :BookTitle , :OTitle , :YOP , :Gener , :BooksSold , :Language , :Author);";
    $stmt = $conn->prepare($AddBook_sql);
    $stmt->bindParam(':BookTitle', $BookTitle);
    $stmt->bindParam(':OTitle', $OTitle);
    $stmt->bindParam(':YOP', $YOP);
    $stmt->bindParam(':Gener', $Gener);
    $stmt->bindParam(':BooksSold', $BooksSold);
    $stmt->bindParam(':Language', $Language);
    $stmt->bindParam(':Author', $Author);
    $stmt->execute();
    header('location: ../View/');

  } catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
    echo "<br/>";
  }
?>
