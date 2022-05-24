<!DOCTYPE html>
<html lang="en">
<?php
if (session_status() == PHP_SESSION_NONE) session_start();
?>
<head>
  <meta charset="utf-8">
  <title>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.ico" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li>Ωράριο λειτουργίας <i class="icon-time"></i><strong>8:30-14:30</strong></li>
              <li>Διεύθυνση <i class="icon-home"></i><strong>Σταδίου 29, Αθήνα 105 59</strong></li>
              <li>Τηλέφωνα επικοινωνίας <i class="icon-phone"></i><strong>213-1516649</strong> <i class="icon-phone"></i><strong>213-1516651</strong></li>
            </ul>
          </div>
					<div class="span12">
            <ul>
              <li>Εξυπηρέτηση με <strong>φυσική παρουσία</strong> μόνο μετά από <strong>ραντεβού!</strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Πληροφορίες Λειτουργίας" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
						<div class="headnav">
							<?php
								if(isset($_POST['sign_action'])){
									include 'php/sign.php';
									if($_POST['sign_action'] == "signup"){
										$samka = $_POST['samka'];
										$smail = $_POST['smail'];
										$pass1 = $_POST['pass1'];
										$pass2 = $_POST['pass2'];
										signup($samka,$smail,$pass1,$pass2);
									}
									if($_POST['sign_action'] == "signin"){
										$samka = $_POST['samka'];
										$pass1 =$_POST['pass1'];
										signin($samka,$pass1);
									}
									if($_POST['sign_action'] == "signoff"){
										unset($_SESSION['amka']);
									}
									if($_POST['sign_action'] == "reset"){
										$samka = $_POST['samka'];
										reset_pass($samka);
									}
								}
								if(isset($_SESSION['amka'])){
									$ulg = $_SESSION['amka'];
									echo <<<_END
										<form method="post" action="ergazomenos_arxeio.php">
										ΑΜΚΑ: $ulg &nbsp
										<button type="submit" method="post"  name="sign_action" value="signoff" class="btn btn-theme btn-rounded btn-mini">ΑΠΟΣΥΝΔΕΣΗ</button>
										</form>
									_END;
								}
								else{
									echo <<<_END
									<ul>
										<li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Εγγραφή</a></li>
										<li><a href="#mySignin" data-toggle="modal">Σύνδεση</a></li>
									</ul>
									_END;
								}
							?>
						</div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Δημιουργήστε <strong>λογαριασμό</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
                  <div class="control-group">
                    <label class="control-label" for="inputAMKA">ΑΜΚΑ</label>
                    <div class="controls">
											<input type="number" name="samka" class="form-control" id="inputAMKA" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
                    </div>
                  </div>
									<div class="control-group">
                    <label class="control-label" for="inputEmail">Ηλεκτρονική Διεύθυνση</label>
                    <div class="controls">
                      <input type="email" class="form-control" name="smail" id="inputEmail" placeholder="πχ. nikos@mail.com" data-rule="email" data-msg="Η ηλεκτρονική διεύθυνση που εισάγατε δεν είναι έγκυρη" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Κωδικός</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" name="pass1" placeholder="πχ. 87DNek" data-rule="minlen:5" data-msg="Ο κωδικός θα πρέπει να αποτελείται από τουλάχιστον 5 χαρακτήρες" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Eπιβεβαίωση Κωδικού</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" name="pass2" placeholder="πχ. 87DNek" data-rule="minlen:5" data-msg="Η επιβεβαίωση κωδικού θα πρέπει να αποτελείται από τουλάχιστον 5 χαρακτήρες" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="sign_action" value="signup" class="btn">ΕΓΓΡΑΦΗ</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Έχετε ήδη λογαριασμό; <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Συνδεθείτε</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Συνδεθείτε στον <strong>λογαριασμό</strong> σας</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
                  <div class="control-group">
                    <label class="control-label" for="inputAMKA">ΑΜΚΑ</label>
                    <div class="controls">
											<input type="number" name="samka" class="form-control" id="inputAMKA" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Κωδικός</label>
                    <div class="controls">
											<input type="password" id="inputSignupPassword" name="pass1" placeholder="πχ. 87DNek" data-rule="minlen:5" data-msg="Ο κωδικός θα πρέπει να αποτελείται από τουλάχιστον 5 χαρακτήρες" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="sign_action" value="signin" class="btn">ΣΥΝΔΕΣΗ</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Ξεχάσατε τον κωδικό; <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Αλλαγή Κωδικού</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Αλλάξτε τον <strong>κωδικό</strong> σας</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
                  <div class="control-group">
                    <label class="control-label" for="inputAMKA">ΑΜΚΑ</label>
                    <div class="controls">
											<input type="number" name="samka" class="form-control" id="inputAMKA" placeholder="πχ. 25018202618" data-rule="minlen:11" data-rule="maxlen:11" data-msg="Τα ψηφία που εισάγατε δεν είναι 11" required />
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="sign_action" value="reset" class="btn">ΑΛΛΑΓΗ ΚΩΔΙΚΟΥ</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Θα σας σταλούν οδηγίες για την αλλαγή κωδικού στην ηλεκτρονική σας διεύθυνση
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
							<h1> Έχετε εργασιακά ζητήματα; Είμαστε στην διάθεση σας!</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li>
                      <a href="index.html"><i class="icon-home"></i>ΑΡΧΙΚΗ </a>
                    </li>
                    <li class="dropdown active">
                      <a href="#">ΕΡΓΑΖΟΜΕΝΟΣ <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">ΚΟΡΩΝΟΪΟΣ <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="ergazomenos_metra.html">ΜΕΤΡΑ ΠΡΟΛΗΨΗΣ</a></li>
                            <li><a href="ergazomenos_sumptwmata.html">ΣΥΝΑΔΕΛΦΟΣ ΜΕ ΣΥΜΠΤΩΜΑΤΑ</a></li>
														<li><a href="ergazomenos_thlergasia.html">ΤΗΛΕΡΓΑΣΙΑ</a></li>
														<li><a href="ergazomenos_anastolh.html">ΑΝΑΣΤΟΛΗ ΣΥΜΒΑΣΗΣ ΕΡΓΑΣΙΑΣ</a></li>
														<li><a href="ergazomenos_adeiaEidikouSkopou.html">ΑΔΕΙΑ ΕΙΔΙΚΟΥ ΣΚΟΠΟΥ</a></li>
                          </ul>
                        </li>
												<li class="active"><a href="ergazomenos_arxeio.html">ΠΡΟΣΩΠΙΚΟ ΑΡΧΕΙΟ</a></li>
                        <li class="dropdown"><a href="#">ΔΙΚΑΙΩΜΑΤΑ & ΥΠΟΧΡΕΩΣΕΙΣ <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="#">ΦΟΡΟΛΟΓΙΑ</a></li>
                            <li><a href="#">ΑΣΦΑΛΙΣΗ</a></li>
                            <li><a href="#">ΑΔΕΙΕΣ</a></li>
														<li><a href="#">ΕΠΙΔΟΜΑΤΑ</a></li>
														<li><a href="#">ΕΡΓΑΤΙΚΑ ΑΤΥΧΗΜΑΤΑ</a></li>
														<li><a href="#">ΑΠΟΖΗΜΙΩΣΗ ΑΠΟΛΥΣΗΣ</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">ΕΡΓΟΔΟΤΗΣ <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">ΚΟΡΩΝΟΪΟΣ <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="ergodoths_metra.html">ΜΕΤΡΑ ΠΡΟΛΗΨΗΣ</a></li>
                            <li><a href="ergodoths_sumptwmata.html">ΕΡΓΑΖΟΜΕΝΟΣ ΜΕ ΣΥΜΠΤΩΜΑΤΑ</a></li>
														<li><a href="ergodoths_thlergasia.html">ΤΗΛΕΡΓΑΣΙΑ</a></li>
														<li><a href="ergodoths_anastolh.html">ΑΝΑΣΤΟΛΗ ΣΥΜΒΑΣΗΣ ΕΡΓΑΣΙΑΣ</a></li>
                          </ul>
                        </li>
												<li><a href="ergodoths_arxeio.html">ΑΡΧΕΙΟ ΕΠΙΧΕΙΡΗΣΗΣ</a></li>
                        <li class="dropdown"><a href="#">ΔΙΚΑΙΩΜΑΤΑ & ΥΠΟΧΡΕΩΣΕΙΣ <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="#">ΦΟΡΟΛΟΓΙΑ</a></li>
                            <li><a href="#">ΑΣΦΑΛΙΣΗ</a></li>
                            <li><a href="#">ΑΔΕΙΕΣ ΠΡΟΣΩΠΙΚΟΥ</a></li>
														<li><a href="#">ΕΠΙΔΟΤΗΣΕΙΣ</a></li>
														<li><a href="#">ΚΛΑΔΙΚΕΣ ΣΥΜΒΑΣΕΙΣ</a></li>
														<li><a href="#">ΑΠΟΖΗΜΙΩΣΕΙΣ</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">ΑΝΕΡΓΟΣ <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
												<li><a href="#">ΠΑΡΟΧΕΣ</a></li>
                        <li><a href="#">ΕΥΡΕΣΗ ΕΡΓΑΣΙΑΣ</a></li>
												<li><a href="#">ΕΠΑΓΓΕΛΜΑΤΙΚΗ ΚΑΤΑΡΤΙΣΗ</a></li>
												<li><a href="#">ΣΕΜΙΝΑΡΙΑ ΕΠΙΜΟΡΦΩΣΗΣ</a></li>
                        <li><a href="#">ΠΡΟΣΦΟΡΑ & ΖΗΤΗΣΗ ΕΠΑΓΓΕΛΜΑΤΩΝ</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">ΣΥΝΤΑΞΙΟΥΧΟΣ <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">ΣΥΝΤΑΞΗ</a></li>
                        <li><a href="#">ΤΑΥΤΟΧΡΟΝΗ ΕΡΓΑΣΙΑ</a></li>
                        <li><a href="#">ΕΠΙΔΟΜΑΤΑ</a></li>
												<li><a href="#">ΚΡΑΤΗΣΕΙΣ</a></li>
												<li><a href="#">ΜΕΤΑΒΙΒΑΣΗ ΣΥΝΤΑΞΗΣ</a></li>
                      </ul>
                    </li>
										<li class="dropdown">
                      <a href="#">ΕΞΥΠΗΡΕΤΗΣΗ ΠΟΛΙΤΗ <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="eksuphrethsh_hlektronika.html">ΗΛΕΚΤΡΟΝΙΚΑ</a></li>
                        <li><a href="eksuphrethsh_fusikhParousia.html">ΦΥΣΙΚΗ ΠΑΡΟΥΣΙΑ</a></li>
                        <li><a href="eksuphrethsh_epikoinwnia.html">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
		<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
						<div class="cta floatleft">
							<ul class="breadcrumb">
								<li><a href="index.html"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
								<li class="active">Εργαζόμενος<i class="icon-angle-right"></i></li>
								<li class="active">Προσωπικό Αρχείο</li>
							</ul>
						</div>
          </div>
					<div class="span12" style="float: left; text-align: center">
						<div class="inner-heading">
							<h2>Προσωπικό Αρχείο</h2>
						</div>
					</div>
        </div>
      </div>
    </section>
    <section id="content">
			<?php
			
			include 'php/functions_ergazomenos.php';
			if(isset($_POST['action_type'])){

				if($_POST['action_type'] == 'mail'){
					$usramka = $_POST['amka'];
					$email = $_POST['mail'];
					email_change($usramka,$email);
				}

				if($_POST['action_type'] == 'child_change'){
					$usramka = $_POST['amka'];
					if(isset($_POST['child'])){
						$uvalue = $_POST['child'];
						underage_child($usramka,$uvalue);
					}
					else{
						underage_child($usramka,'NULL');
					}

				}
				
				if($_POST['action_type'] == 'adeia_submit'){
					$usramka = $_POST['amka'];
					$ucompname = $_POST['name'];
					$usdate = $_POST['st'];
					$ufdate = $_POST['fn'];
					$type = $_POST['adeia'];
					adeia_submit($usramka,$ucompname,$usdate,$ufdate,$type);
				}

				if($_POST['action_type'] == 'quit'){
					$usramka = $_POST['amka'];
					$ucompname = $_POST['name'];
					quit($usramka, $ucompname);
				}
			}
			?>
			<?php
	if(isset($_SESSION['amka'])){ $amka = $_SESSION['amka'];
	include 'php/login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	echo <<<_END
		Θέλετε να αλλάξετε την ηλεκτρονική διεύθυνση του λογαριασμού σας;&nbsp&nbsp&nbsp&nbsp&nbsp
		<button type="button" href="#mailchange" data-toggle="modal">Αλλαγή Email</button>
		
	_END;
	emailchange_modal($amka);
	$query = "Select * FROM signed_user WHERE User_AMKA='$amka'";
	$result = $conn->query($query);
	$result->data_seek(0);
	$row = $result->fetch_array(MYSQLI_BOTH);
	$value = $row['Child_Below_12'];
	echo <<<_END
		<form class="form-horizontal" method="post" action="ergazomenos_arxeio.php">
		<input type="hidden" name="amka" value="$amka">
		<br>
		Είστε γονέας παιδιού/ων κάτω των 12 ετών; &nbsp&nbsp&nbsp
	_END;
	if($value == NULL){
		echo <<<_END
			<input type="checkbox" name="child" value="1">
		_END;
	}
	else{
		echo <<<_END
			<input type="checkbox" name="child" value="1" checked="checked">
		_END;
	}
	echo <<<_END
		&nbsp&nbsp&nbsp
		<button type="submit" name="action_type" value="child_change">Αποθήκευση</button>
		</form>
	_END;
	$query = "SELECT * FROM user_works_for_company WHERE User_AMKA='$amka'";
	$result = $conn->query($query);
	if($result->num_rows != 0){
		$result->data_seek(0);
		$row = $result->fetch_array(MYSQLI_BOTH);
		$name = $row['Company_Name'];
		echo <<<_END
		<div class="row">
		<div class="span12">
		<ul class="nav nav-tabs">
		<li class="active"><a href="#0" data-toggle="tab">Company: $name</a></li>
		_END;
		for($i=1;$i<$result->num_rows;$i++){
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);	
			$name = $row['Company_Name'];
			echo <<<_END
			<li><a href="#$i" data-toggle="tab">Company: $name</a></li>
			_END;
		}
			include_once 'php/functions.php';
			echo "</ul>";
			echo <<<_END
				<div class="tab-content">
				<div class="tab-pane active" id="0">
			_END;
			$result->data_seek(0);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$name = $row['Company_Name'];
			personal_file($amka,$name,0);
			echo <<<_END
				</div>
			_END;
		for($i=1;$i<$result->num_rows;$i++){
			echo <<<_END
				<div class="tab-pane" id="$i">
			_END;
			$result->data_seek($i);
			$row = $result->fetch_array(MYSQLI_BOTH);
			$name = $row['Company_Name'];
			personal_file($amka,$name,$i);
			echo <<<_END
				</div>
			_END;
		}
		echo "</div>"; 		
		echo "</div>";
		echo "</div>";
		
	}
	}
	else{
		echo <<<_END
		<div class="container">
		<div class="row">
		<div class="span5">
		<h4>Χρειάζεστε επειγόντως <strong>άδεια</strong>;</h4>
		</div>
		<div class="span7">
		<a class="btn btn-large btn-theme btn-rounded" href="#adeia" data-toggle="modal" >ΔΗΛΩΣΗ ΑΔΕΙΑΣ</a>
		</div>
		</div>
		<!-- divider -->
		<div class="row">
		<div class="span12">
		<div class="solidline">
		</div>
		</div>
		</div>
		<!-- end divider -->
		<div class="row">
		<div class="span7">
		<h4><strong>Δεν είστε ευχαριστημένοι</strong> από την εργασία σας;</h4>
		</div>
		<div class="span5">
		<a class="btn btn-large btn-dark btn-rounded" href="#paraithsh" data-toggle="modal" >ΠΑΡΑΙΤΗΣΗ</a>
		</div>
		</div>
		</div>
		</section>
		<section class="callaction">
		<div class="container">
		<div class="row">
		<div class="span12">
		<h4>Προχωρήστε σε <a href="#mySignup" data-toggle="modal">εγγραφή</a> ή <a href="#mySignin" data-toggle="modal">σύνδεση</a>
		αν έχετε ήδη λογαριασμό, για να έχετε πρόσβαση στις προσωπικές σας πληροφορίες.</h4>
		</div>
		</div>
		</div>
		_END;
		adeia_modal_unsigned();
		quit_modal_unsigned();
	}
	?>			
    </section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="span4">
						<div class="widget">
							<h5 class="widgetheading">Αρμοδιότητες</h5>
							<ul class="link-list">
								<li>Ατομικές και συλλογικές συμβάσεις</li>
								<li>Διεθνείς σχέσεις</li>
								<li>Ένταξη στην εργασία</li>
								<li>Επιθεώρηση εργασιακών σχέσεων</li>
								<li>Καταπολέμηση της φτώχειας</li>
								<li>Κοινωνική ένταξη και κοινωνική συνοχή</li>
								<li>Κοινωνική και αλληλέγγυα οικονομία</li>
								<li>Κύρια ασφάληση και εισφορές</li>
								<li>Οικονομική εποπτεία και επιθεώρηση νομικών προσώπων</li>
								<li>Παροχών κύριας σύνταξης</li>
								<li>Πρόσθετης και επαγγελματικής ασφάλισης</li>
								<li>Προστασία δικαιωμάτων ατόμων με αναπηρία</li>
								<li>Υγεία και ασφάλεια στην εργασία</li>
								<li>Υποστήριξη ανθρώπινου δυναμικού</li>
							</ul>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<h5 class="widgetheading">Συνεργαζόμενα Υπουργεία</h5>
							<ul class="link-list">
								<li><a href="http://www.mindev.gov.gr/" target="_blank">Υπουργείο Ανάπτυξης και Επενδύσεων</a></li>
								<li><a href="http://www.minagric.gr/index.php/el/" target="_blank">Υπουργείο Αγροτικής Ανάπτυξης και Τροφίμων</a></li>
								<li><a href="https://www.ministryofjustice.gr/" target="_blank">Υπουργείο Δικαιοσύνης</a></li>
								<li><a href="http://www.mod.mil.gr/" target="_blank">Υπουργείο Εθνικής Άμυνας</a></li>
								<li><a href="https://www.mfa.gr/index.html" target="_blank">Υπουργείο Εξωτερικών</a></li>
								<li><a href="https://www.ypes.gr/" target="_blank">Υπουργείο Εσωτερικών</a></li>
								<li><a href="https://www.ynanp.gr/el/" target="_blank">Υπουργείο Ναυτιλίας και Νησιωτικής Πολιτικής</a></li>
								<li><a href="https://www.minfin.gr/" target="_blank">Υπουργείο Οικονομικών</a></li>
								<li><a href="https://www.minedu.gov.gr/" target="_blank">Υπουργείο Παιδείας και Θρησκευμάτων</a></li>
								<li><a href="https://www.culture.gov.gr/el/SitePages/default.aspx" target="_blank">Υπουργείο Πολιτισμού και Αθλητισμού</a></li>
								<li><a href="http://www.mopocp.gov.gr/main.php" target="_blank">Υπουργείο Προστασίας του Πολίτη</a></li>
								<li><a href="https://mintour.gov.gr/" target="_blank">Υπουργείο Τουρισμού</a></li>
								<li><a href="https://www.moh.gov.gr/" target="_blank">Υπουργείο Υγείας</a></li>
								<li><a href="https://www.yme.gr/" target="_blank">Υπουργείο Υποδομών και Μεταφορών</a></li>
								<li><a href="https://mindigital.gr/" target="_blank">Υπουργείο Ψηφιακής Διακυβέρνησης</a></li>
							</ul>
						</div>
					</div>
					<div class="span4">
						<div class="widget">
							<h5 class="widgetheading">Στοιχεία Επικοινωνίας</h5>
							<address>
								<strong>Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων</strong><br>
								 Σταδίου 29<br>
								 Αθήνα 105 59, Αττική
							</address>
							<p>
								<i class="icon-phone"></i> 213-1516649 <br>
								<i class="icon-phone"></i> 213-1516651 <br>
								<i class="icon-envelope-alt"></i> pliroforisi_politi@ypakp.gr <br>
								<i class="icon-envelope-alt"></i> apasxolisi@ypakp.gr <br>
								<i class="icon-envelope-alt"></i> asfaleiaygeia@ypakp.gr <br>
								<i class="icon-envelope-alt"></i> amea@yeka.gr
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="sub-footer">
				<div class="container">
					<div class="row">
						<div class="span6">
							<div class="copyright">
								<p>
									<span>&copy; Υπουργείο Εργασίας & Κοινωνικών Υποθέσεων - All right reserved.</span>
								</p>
								<div class="credits">
									<!--
										All the links in the footer should remain intact.
										You can delete the links only if you purchased the pro version.
										Licensing information: https://bootstrapmade.com/license/
										Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
									-->
									Designed by <a href="https://www.di.uoa.gr/" target="_blank">Department of Informatics & Telecommunications</a>
								</div>
							</div>
						</div>
						<div class="span6">
							<ul class="social-network">
								<li><a href="https://www.facebook.com/labourgovgr/" target="_blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
								<li><a href="https://twitter.com/labourgovgr" target="_blank" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>