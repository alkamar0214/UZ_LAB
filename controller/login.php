<?php

// Login
// User Login
function userLogin(){
	if (isset($_POST['login'])) {
		require 'db.php';
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		if ($username && $password) {
			$check_user = mysqli_query($conn, "SELECT * FROM user_tbl WHERE username='$username'");
			$check_user_row = mysqli_num_rows($check_user);

			if ($check_user_row > 0) {
				while ($row = mysqli_fetch_assoc($check_user)) {
					$user_id = $row['id'];
					$db_username = $row['username'];
					$db_password = $row['password'];

					if ($password == $db_password) {
						
                        session_start();

                        $_SESSION["id"] = $user_id;
						header('location:admin/');
						exit();
					} else {
						echo "<script>alert('Invalid Password!')</script>";
					}
				}
			} else {
				echo "<script>alert('Username is not registered!')</script>";
			}
		}
	}
}

?>