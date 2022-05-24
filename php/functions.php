<!DOCTYPE html>
<html lang="en">
<?php 

function salary_edit_modal($amka,$name,$salary,$id){
	echo <<<_END
	<div class="text-center">
		<div id="salary$id$amka" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4>Αλλαγή <strong>Μισθού</strong> Εργαζομένου (AMKA:$amka)</h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="amka" value="$amka">
				<input type="hidden" name="name" value="$name">
				<div class="control-group">
				<label class="control-label" for="salary">Νέος Μισθός(€)</label>
				<div class="controls">
				<input type="number" id="salary" name="salary" class="form-control" placeholder="πχ. 1350" min="650" data-msg="Κατώτατος μισθός: 650" required />
				</div>
				</div>
				<div class="control-group">
				<div class="controls">
				<button type="submit" name="action_type" value="change_salary" class="btn">ΥΠΟΒΟΛΗ</button>
				</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	_END;
}

function an_modal($amka,$name,$id){
echo <<<_END
	<div class="text-center">
		<div id="anastolh$id$amka" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4><strong>Αναστολή</strong> Σύμβασης Εργαζομένου (ΑΜΚΑ:$amka)</h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="amka" value="$amka">
				<input type="hidden" name="name" value="$name">
				<div class="control-group">
				<label class="control-label" for="sdate">Έναρξη</label>
				<div class="controls">
				<input type="date" id="sdate" name="st" class="form-control" required />
				</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="fdate">Λήξη</label>
				<div class="controls">
				<input type="date" id="fdate" name="fn" class="form-control" required />
				</div>
				</div>
				<div class="control-group">
				<div class="controls">
				<button type="submit" name="action_type" value="enter_an" class="btn">ΥΠΟΒΟΛΗ</button>
				</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	_END;
}

function thlergasia_modal($amka,$name,$id){
echo <<<_END
	<div class="text-center">
		<div id="thlergasia$id$amka" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
			<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4>Δήλωση <strong>Τηλεργασίας</strong> (ΑΜΚΑ:$amka)</h4>
			</div>
			<div class="modal-body">
			<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="amka" value="$amka">
				<input type="hidden" name="name" value="$name">
				<div class="control-group">
				<label class="control-label" for="sdate">Έναρξη</label>
				<div class="controls">
				<input type="date" id="sdate" name="st" class="form-control" required />
				</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="fdate">Λήξη</label>
				<div class="controls">
				<input type="date" id="fdate" name="fn" class="form-control" required />
				</div>
				</div>
				<div class="control-group">
				<div class="controls">
				<button type="submit" name="action_type" value="enter_thl" class="btn">ΥΠΟΒΟΛΗ</button>
				</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	_END;
}

function ergazomenos_modal($name,$id){	
echo <<<_END
	<div id="iserg$id" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Πρόσληψη</strong> Εργαζομένου</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<input type="hidden" name="name" value="$name">
			<div class="control-group">
			<label class="control-label" for="ergamka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="ergamka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="salary">Μισθός(€)</label>
			<div class="controls">
			<input type="number" id="salary" name="salary" class="form-control" placeholder="πχ. 1350" min="650" data-msg="Κατώτατος μισθός: 650" required />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="enter_erg" class="btn">ΠΡΟΣΛΗΨΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function sunergaths_modal($name,$id){
echo <<<_END
	<div id="issun$id" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Προσθήκη <strong>Συνεταίρου</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<input type="hidden" name="name" value="$name">
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Συνεταίρου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 07118439382" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="enter_sun" class="btn">ΠΡΟΣΘΗΚΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function comp_workers($name,$id){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user_works_for_company WHERE Company_Name='$name'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		<table class="table">
			<tr>
				<th>AMKA</th>
				<th>ΜΙΣΘΟΣ</th>
				<th></th>
				<th></th>
				<th></th>
				<th></th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$amka = $row['User_AMKA'];
			$salary = $row['Salary'];
			$query = "SELECT * FROM thlergasia WHERE User_AMKA='$amka' AND Company_Name='$name'";
			$res = $conn->query($query);
			if($res->num_rows == 0) $thl = 0; 
			else $thl = 1;
			$query = "SELECT * FROM anastolh_ergasias WHERE User_AMKA='$amka' AND Company_Name='$name'";
			$res = $conn->query($query);
			if($res->num_rows == 0) $an= 0; 
			else $an = 1;
			echo <<<_END
				<form method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="name" value="$name">
				<tr>
				<td>$amka <input type="hidden" name="amka" value="$amka"></td>
				<td>$salary</td>
				<td><button type="button" href="#salary$id$amka" data-toggle="modal">Αλλαγή Μισθού</button></td>
			_END;
			if(1){
				echo <<<_END
				<td><button type="button" href="#anastolh$id$amka" data-toggle="modal">Αναστολή Σύμβασης</button></td>
			_END;
			}
			else{
				echo <<<_END
				<td><button disabled="disabled" type="button" href="#anastolh$id$amka" data-toggle="modal">Αναστολή Σύμβασης</button></td>
			_END;
			}
			if(1){
				echo <<<_END
				<td><button type="button" href="#thlergasia$id$amka" data-toggle="modal">Δήλωση Τηλεργασίας</button></td>
			_END;
			}
			else{
				echo <<<_END
				<td><button disabled="disabled" type="button" href="#thlergasia$id$amka" data-toggle="modal">Δήλωση Τηλεργασίας</button></td>
			_END;
			}
			echo <<<_END
				<td><button type="submit" name="action_type" value="fire">Απόλυση</button> </td>
				</tr>
				</form>
			_END;
			 salary_edit_modal($amka, $name,$salary,$id);
			an_modal($amka,$name,$id);
			thlergasia_modal($amka,$name,$id);
	}
	echo "</table>";
	
}

function anastoles($name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM anastolh_ergasias WHERE Company_Name='$name'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		<table class="table">
			<tr>
				<th>AMKA</th>
				<th>ΑΠΟ</th>
				<th>ΜΕΧΡΙ</th>
				<th></th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$amka = $row['User_AMKA'];
			$sdate = $row['Start'];
			$fdate = $row['Finish'];
			echo <<<_END
				<form method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="name" value="$name">
				<input type="hidden" name="st" value="$sdate">
				<input type="hidden" name="fn" value="$fdate">
				<tr>
				<td>$amka<input type="hidden" name="amka" value="$amka"></td>
				<td>$sdate</td>
				<td>$fdate</td>
				<td><button type="submit" name="action_type" value="arsh_anal">Άρση Αναστολής</button> </td>
				</tr>
				</form>
			_END;
	}
	echo "</table>";
}

function arxio_thl($name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM thlergasia WHERE Company_Name='$name'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		<table class="table">
			<tr>
				<th>AMKA</th>
				<th>ΑΠΟ</th>
				<th>ΜΕΧΡΙ</th>
				<th></th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$amka = $row['User_AMKA'];
			$sdate = $row['Start'];
			$fdate = $row['Finish'];
			echo <<<_END
				<form method="post" action="ergodoths_arxeio.php">
				<input type="hidden" name="name" value="$name">
				<input type="hidden" name="st" value="$sdate">
				<input type="hidden" name="fn" value="$fdate">
				<tr>
				<td>$amka<input type="hidden" name="amka" value="$amka"></td>
				<td>$sdate</td>
				<td>$fdate</td>
				<td><button type="submit" name="action_type" value="arsh_thl">Άρση Τηλεργασίας</button> </td>
				</tr>
				</form>
			_END;
	}
	echo "</table>";
}

function arxio_adeias($name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM adeia WHERE Company_Name='$name'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		<table class="table">
			<tr>
				<th>AMKA</th>
				<th>ΑΠΟ</th>
				<th>ΜΕΧΡΙ</th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$amka = $row['User_AMKA'];
			$sdate = $row['Start'];
			$fdate = $row['Finish'];
			echo <<<_END
				<tr>
				<td>$amka</td>
				<td>$sdate</td>
				<td>$fdate</td>
				</tr>
			_END;
	}
	echo "</table>";
}

function sunergates($oamka, $name,$id){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user_owns_company WHERE User_AMKA!='$oamka' AND Company_Name='$name'";
	$result = $conn->query($query);
	$rows = $result->num_rows;
	echo <<<_END
		
		<table class="table">
			<tr>
				<th>AMKA</th>
				<th>EMAIL</th>
			</tr>
	_END;
	for($i=0;$i<$rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$amka = $row['User_AMKA'];
			$query =  "SELECT * FROM signed_user WHERE User_AMKA=$amka";
			$res = $conn->query($query);
			if($res->num_rows == 0)
				$email = NULL;
			else{
				$res->data_seek(0);
				$row = $res->fetch_array(MYSQLI_BOTH);
				$email = $row['Email'];
			}
			echo <<<_END
				<tr>
				<td>$amka</td>
				<td>$email</td>
				</tr>
			_END;
	}
	echo "</table>";
	
}

function workertable($oamka,$name,$id){
	echo <<<_END
		<ul class="nav nav-tabs">
		<li class="active"><a href="#ergazomenoi$id" data-toggle="tab">Εργαζόμενοι</a></li>
		<li><a href="#anastolh$id" data-toggle="tab">Αναστολές Εργασίας</a></li>
		<li><a href="#thlergasia$id" data-toggle="tab">Αρχείο Τηλεργασίας</a></li>
		<li><a href="#adeia$id" data-toggle="tab">Άδειες</a></li>
		<li><a href="#sunergates$id" data-toggle="tab">Συνέταιροι</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="ergazomenoi$id">
			<button type="button" href="#iserg$id" data-toggle="modal">Πρόσληψη Εργαζομένου</button>
	_END;
			comp_workers($name,$id);
			echo "</div>";
			echo <<<_END
				<div class="tab-pane" id="anastolh$id">
			_END;
			anastoles($name);
			echo "</div>";
			echo <<<_END
				<div class="tab-pane" id="thlergasia$id">
			_END;
			arxio_thl($name);
			echo "</div>";
			echo <<<_END
				<div class="tab-pane" id="adeia$id">
			_END;
			arxio_adeias($name);
			echo "</div>";
			echo <<<_END
			<div class="tab-pane" id="sunergates$id">
			<button type="button" href="#issun$id" data-toggle="modal">Προσθήκη Συνεταίρου</button>
			_END;
			sunergates($oamka,$name,$id);
			echo "</div>";
	echo "</div>";
	ergazomenos_modal($name, $id);
	sunergaths_modal($name,$id);
}

function works_for($amka,$name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user WHERE AMKA='$amka'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Δεν υπάρχει εργαζόμενος με AMKA:$amka
			</div>
		_END;
		return 0;
	}
	$query = "SELECT * FROM company WHERE Name='$name'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Δεν υπάρχει επιχείρηση $name
			</div>
		_END;
		return 0;
	}
	$query = "SELECT * FROM user_works_for_company WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Ο χρήστης με ΑΜΚΑ:$amka δεν εργάζεται στην επιχείρηση $name
			</div>
		_END;
		return 0;
	}
	return 1;
}

function alter_salary($amka,$name,$salary){
	if(works_for($amka,$name) == 0) return;
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "UPDATE user_works_for_company SET Salary='$salary' WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Ο μισθός του εργαζόμενου με ΑΜΚΑ:$amka άλλαξε σε $salary € τον μήνα
		</div>
	_END;
}

function enter_an($amka,$name,$sdate,$fdate){
	if(works_for($amka,$name) == 0) return;
	$date = date('Y-m-d');
	if ($fdate < $sdate) {
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Η ημερομηνία λήξης θα πρέπει να είναι μεταγενέστερη της ημερομηνίας έναρξης
			</div>
		_END;
	}
	elseif ($sdate < $date) {
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Η ημερομηνία έναρξης θα πρέπει να είναι σημερινή ή μεταγενέστερη
			</div>
		_END;
	}
	else {
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		$query = "INSERT INTO anastolh_ergasias VALUES('$amka','$name','$sdate','$fdate')";
		$result = $conn->query($query);
		echo <<<_END
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				H σύμβαση του εργαζομένου με ΑΜΚΑ:$amka είναι σε αναστολή από $sdate μέχρι $fdate
			</div>
		_END;
		$conn->close();
	}
}

function enter_thl($amka,$name,$sdate,$fdate){
	if(works_for($amka,$name) == 0) return;
	$date = date('Y-m-d');
	if ($fdate < $sdate) {
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Η ημερομηνία λήξης θα πρέπει να είναι μεταγενέστερη της ημερομηνίας έναρξης
			</div>
		_END;
	}
	elseif ($sdate < $date) {
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Η ημερομηνία έναρξης θα πρέπει να είναι σημερινή ή μεταγενέστερη
			</div>
		_END;
	}
	else {
		include 'login.php';
		$conn = new mysqli($hn, $un, $pw, $db);
		$query = "INSERT INTO thlergasia VALUES('$amka','$name','$sdate','$fdate')";
		$result = $conn->query($query);
		echo <<<_END
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				O εργαζόμενος με ΑΜΚΑ:$amka δηλώθηκε σε τηλεργασία από $sdate μέχρι $fdate
			</div>
		_END;
		$conn->close();
	}
}


function arsh_anastolhs($amka,$name){
	if(works_for($amka,$name) == 0) return;
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM anastolh_ergasias WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Δεν έχει δηλωθεί αναστολή σύμβασης για τον εργαζόμενο με ΑΜΚΑ:$amka
		</div>
		_END;
		return ;
	}
	else {
		$query = "DELETE FROM anastolh_ergasias WHERE User_AMKA='$amka' AND Company_Name='$name'";
		$result = $conn->query($query);
		echo <<<_END
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Έγινε άρση αναστολής σύμβασης του εργαζομένου με ΑΜΚΑ:$amka
			</div>
		_END;
	}
}

function arsh_thl($amka,$name){
	if(works_for($amka,$name) == 0) return;
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM thlergasia WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
		<div class="alert alert-error">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Δεν έχει δηλωθεί τηλεργασία για τον εργαζόμενο με ΑΜΚΑ:$amka
		</div>
		_END;
		return ;
	}
	else {
		$query = "DELETE FROM thlergasia WHERE User_AMKA='$amka' AND Company_Name='$name'";
		$result = $conn->query($query);
		echo <<<_END
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Έγινε άρση τηλεργασίας για τον εργαζομένου με ΑΜΚΑ:$amka.
			</div>
		_END;
	}
}

function eis_erg($amka,$name,$salary){
	include 'sign.php';
	cheat_insert($amka);
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user WHERE AMKA='$amka'";
	$result = $conn->query($query);
	if($result->num_rows == 1){
		$query = "INSERT INTO user_works_for_company VALUES('$amka','$name','$salary')";
		$result = $conn->query($query);
		echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			H πρόσληψη εργαζομένου με AMKA:$amka έγινε με επιτυχία
		</div>
	_END;
	}
}

function eis_sun($amka,$name){
	include 'sign.php';
	cheat_insert($amka);
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user WHERE AMKA='$amka'";
	$result = $conn->query($query);
	if($result->num_rows == 1){
		$query = "INSERT INTO user_owns_company VALUES('$amka','$name')";
		$result = $conn->query($query);
		echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			H προσθήκη συνεταίρου με AMKA:$amka έγινε με επιτυχία
		</div>
		_END;
	}
}

function fire($amka, $name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if(works_for($amka,$name) == 0) return;
	$query = "DELETE FROM thlergasia WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	$query = "DELETE FROM adeia WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	$query = "DELETE FROM anastolh_ergasias WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	$query = "DELETE FROM user_works_for_company WHERE User_AMKA='$amka' AND Company_Name='$name'";
	$result = $conn->query($query);
	echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Ο εργαζομενος με ΑΜΚΑ:$amka απολύθηκε από την επιχείρηση $name
		</div>
	_END;
	$conn->close();
}

?>
</html>