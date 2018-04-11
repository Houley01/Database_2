<footer>
		<p class="same_line">Developed By Ethan Houley.</p>
		<p class="same_line"> Copyright &copy; 2018 Copyright Holder All Rights Reserved.</p>
	</footer>
</div>
<!-- Jquerry CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap JavaScript CDN-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<!-- Erro Div -->
<div class="error">
  <div>
    <?php
      print_r ($_SESSION);
    ?>
  </div>
  <?php
    if(isset($_SESSION['error'])) {
      echo '<div class="error message">';
      echo $_SESSION['error'];
      echo '</div>';
      unset($_SESSION['error']);
    }
  ?>
  <?php
    if(isset($_SESSION['message'])) {
      echo '<div class="info message">';
      echo $_SESSION['message'];
      echo '</div>';
      unset($_SESSION['message']);
    }
?>

<!-- Login Modal JavaScript -->
<script type="text/javascript">
// Modal Starts

// Modal Login
$(document).ready(function() {
	$("#login").click(function() {
		$("#loginModal").modal();
	});
});

// Modal Register
$(document).ready(function() {
	$("#Register").click(function() {
		$("#RegisterModal").modal();
	});
});
</script>
