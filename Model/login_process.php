<?php
	include '_Connection.php';
	session_start();
	$login = "SELECT * FROM user WHERE Email = '" . $_POST['SignInEmail'] . "';";
	$conn = dbConnect();
	$stmt = $conn->prepare($login);
	$stmt->execute();
	$result = $stmt->fetch(PDO::FETCH_ASSOC);

$USER_PASSWORD_FROM_INPUT = $_POST['Sign_In_user_pass'];
$USER_PASSWORD_FROM_DATABASE = $result['Password'];

	if($stmt->rowcount() == 0) {
				$_SESSION['error'] = "Login details are invalid please try again";
				// header('Location: ../View/index.php');
		} else {
			// Login Password Checker
			if (password_verify($USER_PASSWORD_FROM_INPUT, $USER_PASSWORD_FROM_DATABASE)) {
			    echo 'Password is valid!';
					$_SESSION['UserID'] = $result['UserID'];
					$_SESSION['UserStatus'] = $result['UserStatus'];
					$_SESSION['FName'] = $result['F.Name'];
					$_SESSION['message'] = "Login successful";
					header('Location: ../View/index.php');

			} else {
					echo 'Invalid password.';
					header('Location: ../View/index.php');
			}
		}
?>
