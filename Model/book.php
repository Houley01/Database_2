<?php
	include '_Connection.php';
	$BookNum = $_GET['BookID'];
	header('Content-Type: application/json');
	// Pulls informations from the database abouts books
	$conn = dbConnect();
	//Select Book Where the BookID = Request and grab the
	// Information from Author and Bookplot and BookRanking.
	$LoginBookModal = "SELECT * FROM book
	INNER JOIN author ON book.AuthorID = author.AuthorID
	INNER JOIN bookplot ON book.BookPlotID = bookplot.BookPlotID
	INNER JOIN bookranking ON book.RankingID = bookranking.RankingID
	WHERE book.BookID = :BookNum ;";
	$stmt = $conn->prepare($LoginBookModal);
	$stmt->bindParam(':BookNum', $BookNum);
	$stmt->execute();
	$StaticBook = $stmt->fetch(PDO::FETCH_ASSOC);

// Encode the results into a json array
	if (isset($BookNum)) {

		echo json_encode($StaticBook);

	}else{
			echo json_encode(Array($BookNum,false));
	}

 ?>
