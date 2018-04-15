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
			<h2 class="heading">Books</h2>
			<?php include 'include/Admin_BookShelf.php'; ?>
		</div>

		<hr>
