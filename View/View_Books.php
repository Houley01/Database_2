<?php
  include 'include/header.php';       // Header Information
  include '../Model/_Session.php';    // Session Start
  include 'include/Admin_Access.php'; // http Redirect if do not have Admin_Access
  echo'<div class="container">';
		//-- Books Shelf --\\
	echo'	<div class="row">';
	echo'		<h2 class="heading">Books</h2>';
      include 'include/Admin_BookShelf.php';
	echo'	</div>';

	echo'	<hr>';
 include 'include/footer.php';      // Footer Information + js script
?>
