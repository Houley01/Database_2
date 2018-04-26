<?php
	// clean users input
	function clean($data) {
		$data = trim($data);
		$data= stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>
