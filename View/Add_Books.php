<?php
  include 'include/header.php';       // Header Information
  include 'include/Admin_Access.php'; // http Redirect if do not have Admin_Access
  include '../Model/_Connection.php'; // Connection File
?>
<div class="jumbotron">
  <div class="container">
    <h1>Welcome, <?php echo $_SESSION['FName']; ?></h1>
    <h2>Library</h2>
    <p>Current Time:
      <span class="clock" id="time"></span>
    </p>
  </div>
</div>
<div class="container">
  <!-- Books Shelf -->
  <div class="row">
    <h2 class="heading"></h2>
    <div class="container">
      <form class="" action="../Model/Add_Book.php" method="post">
        <input type="text" hidden name="Username" value="">

        <div class="row">
          <div class="row_heading">
            <h3>Who Is The Author </h3>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Author's Name</span>
            <select required class="form-control" name="Author" id="Author">
              <option disabled selected>Who Is The Author </option>

              <?php

              $Author = "SELECT * FROM `author`;";
              $conn = dbConnect();
              $stmt = $conn->prepare($Author);
              $stmt->execute();
              $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

              for ($loop = 0; $loop < count($result); $loop++) {
                echo '<option value="' . $result[$loop]['AuthorID'] . '"  Name=""> ' . $result[$loop]['Name'] . ' ' . $result[$loop]['Surname'] . '</option>';
              }
              echo "</select>";
              ?>
          </div>
        </div>


        <div class="row">
          <div class="row_heading">
            <h3>Book Information</h3>
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Book Title</span>
            <input type="text" required class="form-control" placeholder="Book Title" aria-describedby="basic-addon1" id="Book_Title" name="Book_Title">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Original Title</span>
            <input type="text" required class="form-control" placeholder="Original Title" aria-describedby="basic-addon1" id="Original_Title" name="Original_Title">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Year Of Publication</span>
            <input type="number" required  class="form-control" placeholder="Year Of Publication" aria-describedby="basic-addon1" id="Year_Of_Publication" name="Year_Of_Publication">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Genre</span>
            <input type="text" required class="form-control" placeholder="Genre" aria-describedby="basic-addon1" id="Genre" name="Genre">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Language Written In</span>
            <input type="text" required class="form-control" placeholder="Language Written In" aria-describedby="basic-addon1" id="Language_Written_In" name="Language_Written_In">
          </div>
          <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Millions Sold</span>
            <input type="text" required class="form-control" placeholder="How Many Millions have Been Sold" aria-describedby="basic-addon1" id="Millions_Sold" name="Millions_Sold">
          </div>
        </div>

        <div class="row">
          <input type="submit" class="btn btn-lg btn-success" name="" value="Submit">
        </div>
      </form>

  </div>

  <hr>



<?php
 include 'include/footer.php';      // Footer Information + js script
?>



</div>
