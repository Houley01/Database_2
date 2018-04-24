<?php
	include '_Connection.php';
	session_start();
	// searchs the database for an email that matchs the email, of the user input.
	$login = "SELECT * FROM user WHERE Email = '" . $_POST['SignInEmail'] . "';";
	$conn = dbConnect();
	$stmt = $conn->prepare($login);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);
// Gets User login cordenttenal and changes the name of the object.
$USER_PASSWORD_FROM_INPUT = $_POST['Sign_In_user_pass'];
$USER_PASSWORD_FROM_DATABASE = $result['Password'];
// If user email is not found throw an erro on reload
	if($stmt->rowcount() == 0) {
				$_SESSION['error'] = "Login details are invalid please try again";
				header('Location: ../View/index.php');
		} else {
			// Checks User input password agentist the hashed password in the database
			if (password_verify($USER_PASSWORD_FROM_INPUT, $USER_PASSWORD_FROM_DATABASE)) {
			    echo 'Password is valid!';
					//Set Users details into session.
					$_SESSION['UserID'] = $result['UserID'];
					$_SESSION['UserStatus'] = $result['UserStatus'];
					$_SESSION['FName'] = $result['F.Name'];
					$_SESSION['message'] = "Login successful";
					header('Location: ../View/index.php');

			} else {
				// if an email was found but your password was wrong.
					$_SESSION['error'] = "Login details are invalid please try again";
					header('Location: ../View/index.php');
			}
		}
?>
