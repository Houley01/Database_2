<?php
  function dbConnect() {
    $dbuser = "root";
    $dbpass = "";
    try {
      $conn = new PDO("mysql:host=localhost;dbname=database_2_houley", $dbuser,$dbpass);
      // set attributes
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      return $conn;
    }
    catch(PDOException $e) {
      $error_message = $e->getMessage();
      echo '<h1>Database Connection Error</h1>';
      echo '<p>There was an error connecting to the database.</p>';
       // display the error message
      echo '<p>Error message:   $error_message; </p>';
      die();
    }
  }

?>
