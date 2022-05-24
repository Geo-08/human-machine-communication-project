<!DOCTYPE html>
<html lang="en">
<?php 


function salary_edit_modal_uns(){
echo <<<_END
	<div id="salary" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Αλλαγή <strong>Μισθού</strong> Εργαζομένου</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
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
	_END;
}


function an_modal_uns(){
echo <<<_END
	<div id="anastolh" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Αναστολή</strong> Σύμβασης Εργαζομένου</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
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
	_END;
}

function thlergasia_modal_uns(){
echo <<<_END
	<div id="thlergasia" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Δήλωση <strong>Τηλεργασίας</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="sdate">Έναρξη</label>
			<div class="controls">
			<input type="date" id="sdate" name="st" class="form-control" required>
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="fdate">Λήξη</label>
			<div class="controls">
			<input type="date" id="fdate" name="fn" class="form-control" required>
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
	_END;
}

function ergazomenos_modal_uns(){
echo <<<_END
	<div id="iser" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Πρόσληψη</strong> Εργαζομένου</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
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

function sunergaths_modal_uns(){
echo <<<_END
	<div id="issun" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4>Προσθήκη <strong>Συνεταίρου</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
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

function fire_modal(){
echo <<<_END
	<div id="fire" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Απόλυση</strong> Εργαζομένου</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="fire" class="btn">ΑΠΟΛΥΣΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function arsh_thlergasias_modal(){
echo <<<_END
	<div id="thl" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Άρση Τηλεργασίας</strong></h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="arsh_thl" class="btn">ΥΠΟΒΟΛΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}


function arsh_anastolhs_modal(){
echo <<<_END
	<div id="an" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mycompcreationLabel" aria-hidden="true">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		<h4><strong>Άρση Αναστολής</strong> Σύμβασης</h4>
		</div>
		<div class="modal-body">
		<form class="form-horizontal" method="post" action="ergodoths_arxeio.php">
			<div class="control-group">
			<label class="control-label" for="owamka">AMKA Εργοδότη</label>
			<div class="controls">
			<input type="number" id="owamka" name="owamka" class="form-control" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="NAME">Όνομα Επιχείρησης</label>
			<div class="controls">
			<input type="text" id="NAME" name="name" class="form-control" placeholder="πχ. Coca-Cola" data-msg="Παρακαλώ εισάγετε το όνομα της επιχείρησης σας" required />
			</div>
			</div>
			<div class="control-group">
			<label class="control-label" for="amka">AMKA Εργαζομένου</label>
			<div class="controls">
			<input type="number" id="amka" name="amka" class="form-control" placeholder="πχ. 13059718529" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
			</div>
			</div>
			<div class="control-group">
			<div class="controls">
			<button type="submit" name="action_type" value="arsh_an" class="btn">ΥΠΟΒΟΛΗ</button>
			</div>
			</div>
		</form>
		</div>
	</div>
	_END;
}

function owner_of($oamka,$name){
	include 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	$query = "SELECT * FROM user WHERE AMKA='$oamka'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Δεν υπάρχει εργοδότης με AMKA:$oamka
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
	$query = "SELECT * FROM user_owns_company WHERE User_AMKA='$oamka' AND Company_Name='$name'";
	$result = $conn->query($query);
	if($result->num_rows == 0){
		echo <<<_END
			<div class="alert alert-error">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				Ο χρήστης με ΑΜΚΑ:$oamka δεν είναι ιδιοκτήτης της επιχείρησης $name
			</div>
		_END;
		return 0;
	}
	return 1;
}

function salary_change_uns($oamka,$name,$amka,$salary){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	alter_salary($amka,$name,$salary);
}


function enter_an_uns($oamka,$name,$amka,$sdate,$fdate){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	enter_an($amka,$name,$sdate,$fdate);
}


function enter_thl_uns($oamka,$name,$amka,$sdate,$fdate){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	enter_thl($amka,$name,$sdate,$fdate);
}

function arsh_anastolhs_uns($oamka,$name,$amka){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	arsh_anastolhs($amka,$name);
}

function arsh_thl_uns($oamka,$name,$amka){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	arsh_thl($amka,$name);
}

function eis_erg_uns($oamka,$name,$amka,$salary){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	eis_erg($amka,$name,$salary);
}

function eis_sun_uns($oamka,$name,$amka){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	eis_sun($amka, $name);
}

function fire_uns($oamka,$name,$amka){
	if(owner_of($oamka,$name) == 0) return;
	include 'functions.php';
	fire($amka, $name);
}

?>
</html>