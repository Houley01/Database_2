<?php
  include '../Model/_Connection.php';

  $SQL_Bookshelf = 'SELECT * FROM book';
  $conn = dbConnect();
	$stmt = $conn->prepare($SQL_Bookshelf);
	$stmt->execute();
	$table = $stmt->fetchAll();


 if (empty($table) ) {
     echo '<h2>Sorry The Bookshelf Is Currently Empty, Please Check Back Later</h2>';
 } else{
   $count = 0;
    foreach ($table as $table) {
      $count++;
      echo '<div class="BookCover">';
      echo '  <figure>';
      echo '  <img src="images/BookCover/'. $table["Cover"].'">';
      echo '  <figcaption>';
        echo $table['BookTitle'];
      echo '  </figcaption>';

        echo '  </figure>';
  echo '</div>';
 }
}
?>
