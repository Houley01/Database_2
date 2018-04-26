<?php
  include '../Model/_Connection.php';
  include '../Model/Functions.php';
  // Search Database for books
  $table = Bookshelf();

  if (empty($table) ) {
    //If the database query returns nothing
    echo '<h2>Sorry The Bookshelf Is Currently Empty, Please Check Back Later</h2>';
  } else {
    // Display a book shelf
    foreach ($table as $table) {
      // Loop Through Each Results For the Qurey
      echo '<button class="NON_Button_LOOK" value="'.$table["BookID"].'"onclick="HomeOpenBook(this)" data-toggle="modal" data-target="#LoginBookModal">';
        echo '<div class="BookCover">';
          echo '<figure>';
            echo '<img src="images/BookCover/'. $table["Cover"].'">';
              echo '<figcaption>';
                echo $table['BookTitle'];
              echo '</figcaption>';
          echo '</figure>';
        echo '</div>';
      echo '</button>';
    }
  }
?>
