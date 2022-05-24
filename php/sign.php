<?php //host, database name,  username, password to connect to the database

	function cheat_insert($amka){
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		$query = "SELECT * FROM user WHERE AMKA='$amka'";
		$result =  $conn->query($query);
		if($result->num_rows == 0){
			$query = "INSERT INTO user VALUES('$amka')";
			$result =  $conn->query($query);
		}
	}

	function signup($amka,$email,$psw1,$psw2){
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error){ die($conn->connect_error);
			echo "didn't connect";
		}

		$query = "SELECT * FROM signed_user WHERE User_AMKA='$amka'";
		$result = $conn->query($query);
		if($result->num_rows ==0){
			$query = "SELECT * FROM signed_user WHERE Email='$email'";
			$result = $conn->query($query);
			if($result->num_rows ==0){
				if($psw1 == $psw2){
					cheat_insert($amka);
					$query = "INSERT INTO signed_user VALUES('$amka','$email','$psw1',NULL)";
					$result = $conn->query($query);
					$_SESSION['amka'] = $amka;
				echo <<<_END
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Επιτυχής εγγραφή
					</div>
				_END;
				}
				else{
				echo <<<_END
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						O κωδικός και ο κωδικός επιβεβαίωσης δεν είναι ίδιοι
					</div>
				_END;
				}
			}
			else{
			echo <<<_END
				<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Αυτο το email χρησιμοποιείτε ήδη
					</div>
			_END;
			}
		}
		else{
		echo <<<_END
			<div class="alert alert-error">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Υπάρχει ήδη λογαριασμός με αυτό το ΑΜΚΑ
				</div>
		_END;
		}
	}

	function signin($amka,$psw){
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error){ die($conn->connect_error);
			echo "didn't connect";
		}
		$query = "SELECT * FROM signed_user WHERE User_AMKA='$amka' AND Password='$psw'";
		$result = $conn->query($query);
		if($result->num_rows == 1){
			$_SESSION['amka'] = $amka;
			echo <<<_END
				<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Επιτυχής σύνδεση
					</div>
			_END;
		}
		else{
			echo <<<_END
				<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Λανθασμένα στοιχεία
					</div>
			_END;
		}
	}
	
	function reset_pass($amka){
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error){ die($conn->connect_error);
			echo "didn't connect";
		}
		$query = "SELECT * FROM signed_user WHERE User_AMKA='$amka'";
		$result = $conn->query($query);
		if($result->num_rows == 1){
			echo <<<_END
				<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Οι οδηγίες στάλθηκαν
					</div>
			_END;
		}
		else{
			echo <<<_END
				<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						Λανθασμένα στοιχεία
					</div>
			_END;
		}
	}
	
	function send_message($amka){
		cheat_insert($amka);
		echo <<<_END
			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Το μήνυμα στάλθηκε. Θα λάβετε απάντηση στην ηλεκτρονική σας διεύθυνση εντός μιας εργάσιμης μέρας
				</div>
		_END;
	}
?>