<?php
  // Search Database for books
  function Bookshelf() {
    $SQL_Bookshelf = 'SELECT * FROM book';
    $conn = dbConnect();
    $stmt = $conn->prepare($SQL_Bookshelf);
    $stmt->execute();
    $table = $stmt->fetchAll();
    return $table;
  }
  function SelectAuthor() {
  $Author = "SELECT * FROM `author`;";
  $conn = dbConnect();
  $stmt = $conn->prepare($Author);
  $stmt->execute();
  $Author = $stmt->fetchAll(PDO::FETCH_ASSOC);
  return $Author;
 }
?>
