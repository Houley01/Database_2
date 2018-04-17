<?php
include '_Connection.php';
	$BookNum = $_GET['BookID'];
	header('Content-Type: application/json');

		$LoginBookModal = "SELECT * FROM book
		INNER JOIN author ON author.AuthorID = book.AuthorID
		INNER JOIN bookplot ON bookplot.BookID = book.BookID
		INNER JOIN bookranking ON bookranking.BookID = book.BookID
		 WHERE book.BookID = '" . $BookNum . "' ;";
		$conn = dbConnect();
		$stmt = $conn->prepare($LoginBookModal);
		$stmt->execute();
		$StaticBook = $stmt->fetch(PDO::FETCH_ASSOC);


	if (isset($BookNum)) {

		echo json_encode($StaticBook);

	}else{
			echo json_encode(Array($BookNum,false));
	}

 ?>
