<?php

function meeting_submit($amka, $datetime){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error){ die($conn->connect_error);
		echo "didn't connect";
	}
	include 'php/sign.php';
	cheat_insert($amka);
	$query = "INSERT INTO rantevou VALUES('$amka','$datetime')";  
	$result = $conn->query($query);
	echo <<<_END
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		To ραντεβού σας για τις $datetime καταχωρήθηκε. Αν θέλετε να ακυρώσετε αυτό ή άλλο ραντεβού πατήστε το κουμπί "Τα ραντεβού μου"
	</div>
	_END;
}


function my_meetings($amka){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM rantevou WHERE User_AMKA='$amka'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		
		<table class="table">
			<tr>
				<th>Τα ραντεβού μου</th>
				<th></th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$datetime = $row['Date_Time'];
			echo <<<_END
				<form method="post" action="eksuphrethsh_fusikhParousia.php">
				<input type="hidden" name="amka" value="$amka">
				<tr>
				<td>$datetime<input type="hidden" name="datetime" value="$datetime"></td>
				<td><button type="submit" name="action_type" value="delete_rantevou">Ακύρωση Ραντεβού </button></td>
				</tr>
				</form>
			_END;
	}
	echo "</table>";
}

function cancel_rantevou($amka,$datetime){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "DELETE FROM rantevou WHERE User_AMKA='$amka' AND Date_Time='$datetime'";
	$result = $conn->query($query);
	echo <<<_END
	<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			To ραντεβού σας για τις $datetime έχει ακυρωθεί.
		</div>
	_END;

}

?>

