<?php //host, database name,  username, password to connect to the database

function adeia_modal($amka, $name, $id){
echo <<<_END
	<div id="adeia$id" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Δήλωση <strong>Άδειας</strong> (Eπιχείρηση:$name)</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
			<input type="hidden" name="amka" value="$amka">
			<input type="hidden" name="name" value="$name">
			<div class="control-group">
			<label class="control-label" for="adeia">Διαλέξτε Τύπο Άδειας</label>
			<div class="controls">
			<select name="adeia" id="adeia">
				<option value="Ειδικού Σκοπού">Ειδικου Σκοπού</option>
				<option value="Κανονική">Κανονική</option>
				<option value="Μητρότητας">Μητρότητας</option>
				<option value="Γονική">Γονική</option>
				<option value="Αναρωτική">Αναρωτική</option>
				<option value="Αιμοδοσίας">Αιμοδοσίας</option>
				<option value=" Άνευ Αποδοχών">Άνευ Αποδοχών</option>
			</select>
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="sdate">Έναρξη</label>
			<div class="controls">
			<input type="date" id="sdate" name="st" class="form-control" data-rule="required">
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="fdate">Λήξη</label>
			<div class="controls">
			<input type="date" id="fdate" name="fn" class="form-control" data-rule="required">
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="adeia_submit" class="btn">ΥΠΟΒΟΛΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function adeia_modal_unsigned(){
echo <<<_END
	<div id="adeia" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Δήλωση <strong>Άδειας</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="amka">AMKA</label>
			<div class="controls">
				<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 07118439382" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
				<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-rule="required" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης" />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="adeia">Τύπος Άδειας</label>
			<div class="controls">
			<select name="adeia" id="adeia">
				<option value="Ειδικού Σκοπού">Ειδικου Σκοπού</option>
				<option value="Κανονική">Κανονική</option>
				<option value="Μητρότητας">Μητρότητας</option>
				<option value="Γονική">Γονική</option>
				<option value="Αναρωτική">Αναρωτική</option>
				<option value="Αιμοδοσίας">Αιμοδοσίας</option>
				<option value=" Άνευ Αποδοχών">Άνευ Αποδοχών</option>
			</select>
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="sdate">Έναρξη</label>
			<div class="controls">
			<input type="date" id="sdate" name="st" class="form-control" data-rule="required">
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="fdate">Λήξη</label>
			<div class="controls">
			<input type="date" id="fdate" name="fn" class="form-control" data-rule="required">
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="adeia_submit" class="btn">ΥΠΟΒΟΛΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function quit_modal_unsigned(){
	echo <<<_END
	<div id="paraithsh" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Παραίτηση</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="amka">AMKA</label>
			<div class="controls">
				<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 07118439382" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
				<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-rule="required" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης" />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="quit" class="btn">ΥΠΟΒΟΛΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function emailchange_modal($amka){
		echo <<<_END
	<div id="mailchange" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Αλλαγή <strong>Email</strong> Λογαριασμού</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
			<input type="hidden" name="amka" value="$amka">
			<div class="control-group">
			<label class="control-label" for="mail">Νέο Email</label>
			<div class="controls">
			<input type="email" class="form-control" name="mail" id="mail" placeholder="πχ. nikos@mail.com" data-rule="email" data-msg="Η ηλεκτρονική διεύθυνση που εισάγατε δεν είναι έγκυρη" />
			</div>
			</div>
			<div class="text-center">
			<button type="submit" name="action_type" value="mail" class="btn">ΑΠΟΘΗΚΕΥΣΗ</button>
			</div>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function katastash($amka,$name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$date = date('Y-m-d');
	$query = "SELECT * FROM adeia WHERE Company_Name='$name' AND User_AMKA='$amka' AND `Start` <= '$date' AND `Finish` >= '$date'";
	$result = $conn->query($query);
	if($result->num_rows >= 1){
		$result->data_seek(0);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$type = $row['Type'];
		$state = "Άδεια - $type";
		$sdate = $row['Start'];
		$fdate = $row['Finish'];
	}
	else{
		$query = "SELECT * FROM anastolh_ergasias WHERE Company_Name='$name' AND User_AMKA='$amka' AND `Start` <= '$date' AND `Finish` >= '$date'";
		$result = $conn->query($query);
		if($result->num_rows >= 1){
			$result->data_seek(0);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$sdate = $row['Start'];
			$fdate = $row['Finish'];
			$state = "Αναστολή Σύμβασης Εργασίας";
		}
		else{
			$query = "SELECT * FROM thlergasia WHERE Company_Name='$name' AND User_AMKA='$amka' AND `Start` <= '$date' AND `Finish` >= '$date'";
			$result = $conn->query($query);
			if($result->num_rows >= 1){
				$result->data_seek(0);
				$row = $result->fetch_array(MYSQLI_BOTH);
				$sdate = $row['Start'];
				$fdate = $row['Finish'];
				$state = "Τηλεργασία";
				
			}
			else{
				$sdate = NULL;
				$fdate = NULL;
				$state = "Ενεργός με φυσική παρουσία";
			}
		}
	}
	echo <<<_END
		<table class="table">
			<tr>
				<th>Τρέχουσα Κατάσταση</th>
				<th>ΑΠΟ</th>
				<th>ΜΕΧΡΙ</th>
			</tr>
	_END;
			echo <<<_END
				<tr>
				<td>$state</td>
				<td>$sdate</td>
				<td>$fdate</td>
				</tr>
			_END;
	echo "</table>";
}


function ergodotes($name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user_owns_company WHERE Company_Name='$name'";
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

function sunadelfoi($oamka, $name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user_works_for_company WHERE User_AMKA!='$oamka' AND Company_Name='$name'";
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

function personal_file($oamka,$name,$id){
	echo <<<_END
		<ul class="nav nav-tabs">
		<li class="active"><a href="#file$id" data-toggle="tab">Κατάσταση</a></li>
		<li><a href="#ergodotes$id" data-toggle="tab">Εργοδότες</a></li>
		<li><a href="#sunadelfoi$id" data-toggle="tab">Συνάδελφοι</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="file$id">
			<form method="post" action="ergazomenos_arxeio.php">
			<input type="hidden" name="amka" value="$oamka">
			<input type="hidden" name="name" value="$name">
			<div class="row">
			<div class="span12">
			<div class="span5">
			<button type="button" href="#adeia$id" data-toggle="modal">Δήλωση Άδειας</button>
			</div>
			<div class="span4">
			</div>
			<div class="span1">
			<div class="text-right">
			<button type="submit" name="action_type" value="quit" class="btn">ΠΑΡΑΙΤΗΣΗ</button>
			</div>
			</div>
			</div>
			</div>
			</form>
	_END;
			katastash($oamka,$name);
			echo "</div>";
			echo <<<_END
				<div class="tab-pane" id="ergodotes$id">
			_END;
			ergodotes($name);
			echo "</div>";
			echo <<<_END
				<div class="tab-pane" id="sunadelfoi$id">
			_END;
			sunadelfoi($oamka, $name);
			echo "</div>";
			
	echo "</div>";
	adeia_modal($oamka, $name, $id);
}
	

function adeia_submit($amka,$name,$sdate,$fdate,$type){
	include 'functions.php';
	if(works_for($amka,$name) == 0) return;
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "INSERT INTO adeia VALUES('$amka','$name','$sdate','$fdate','$type')";
	$result = $conn->query($query);
	echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Η άδεια σας έχει καταχωρήθηκε
		</div>
	_END;
	$conn->close();
}

function quit($amka, $name){
	include 'functions.php';
	if(works_for($amka,$name) == 0) return;
	include 'php/login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
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
			Η παραίτηση σας καταχωρήθηκε
		</div>
	_END;
	$conn->close();
}

function email_change($amka,$email){
	include 'php/login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "UPDATE signed_user  SET Email='$email' WHERE User_AMKA='$amka'";
	$result = $conn->query($query);
	echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			Το email σας αλλάξε με επιτυχία
		</div>
	_END;
	$conn->close();
}

function underage_child($amka,$value){
	include 'php/login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "UPDATE signed_user  SET Child_Below_12=$value WHERE User_AMKA='$amka'";
	$result = $conn->query($query);
	echo <<<_END
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			H αλλαγή αποθηκεύτηκε
		</div>
	_END;
	$conn->close();

}

?>