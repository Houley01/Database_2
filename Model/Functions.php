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
  
?>
