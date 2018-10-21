<?php
	session_start();
	$conn = mysqli_connect("localhost","root","root","svaruna_db");
		
	$message="";
	if(!empty($_POST["login"])) {
		$result = mysqli_query($conn,"SELECT * FROM login WHERE vardas='" . $_POST["user_name"] . "' and slaptazodis = '". $_POST["password"]."'");
		$row  = mysqli_fetch_array($result);
		
		if(is_array($row)) {
			$_SESSION["user_id"] = $row['user_id'];
		} else {
			$message = "Neteisingas vardas arba slaptažodis!";
		}
	}

	if(!empty($_POST["logout"])) {
		$_SESSION["user_id"] = "";
		session_destroy();
	}
?>

<html>
<head>

	<style>
		#frmLogin { 
			padding: 20px 100px;
			background: #B6E0FF;
			color: #555;
			display: inline-block;
			border-radius: 4px; 
			margin-bottom: -1em;
		}
		.field-group { 
			margin: 15px 0px; 
		}
		.input-field {
			padding: 8px;
			width: 200px;
			border: #A3C3E7 1px solid;
			border-radius: 4px; 
		}
		.form-submit-button {
			background: #65C370;
			border: 0;
			padding: 8px 50px;
			border-radius: 4px;
			color: #FFF;
			text-transform: uppercase; 
		}
		.member-dashboard {
			padding: 100px;
			background: #D2EDD5;
			color: #555;
			border-radius: 4px;
			display: inline-block;
			text-align: center; 
		}
		.logout-button {
			color: #09F;
			text-decoration: none;
			background: none;
			border: none;
			padding: 0px;
			cursor: pointer;
		}
		.error-message {
			text-align: center;
			color: #FF0000;
		}
		.demo-content label{
			width: auto;
		}
	</style>
</head>

<body>
	<div>
		<div>

			<?php if(empty($_SESSION["user_id"])) { ?>
				<form action="" method="post" id="frmLogin">
					<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
					<div class="field-group">
						<div><label for="login">Vartotojo vardas</label></div>
						<div><input name="user_name" type="text" class="input-field"></div>
					</div>
					<div class="field-group">
						<div><label for="password">Slaptažodis</label></div>
						<div><input name="password" type="password" class="input-field"> </div>
					</div>
					<div class="field-group">
						<div><input type="submit" name="login" value="Prisijungti" class="form-submit-button"></span></div>
					</div>       
				</form>
			<?php 
			} else { 
				$result = mysqlI_query($conn,"SELECT * FROM login WHERE user_id='" . $_SESSION["user_id"] . "'");
				$row  = mysqli_fetch_array($result);
			?>
				<form action="" method="post" id="frmLogout">
					<div class="member-dashboard">Jūs esate <?php echo ucwords($row['vardas']); ?>, prisijungėte sėkmingai!<br>
			Norėdami atsijungti, spauskite <input type="submit" name="logout" value="čia" class="logout-button">.</div>
				</form>
			</div>
		</div>

<!-- Po prisijungmo--------------- -->
			<div class="ml-3">
				<h5 class="bg-secondary mt-5 p-1">Rekvizitų redagavimas</h5>
				<form action="create_rekvizitai.php" method="post">
					<table width="25%">
						<tr> 
							<td>Pavadinimas</td>
							<td><input type="text" name="pavadinimas" required></td>
						</tr>
						<tr> 
							<td>Adresas</td>
							<td><input type="text" name="adresas" required></td>
						</tr>
						<tr> 
							<td>Darbo laikas</td>
							<td><input type="text" name="laikas" required></td>
						</tr>
						<tr> 
							<td>Telefonas</td>
							<td><input type="text" name="telefonas" required></td>
						</tr>
						<tr> 
							<td>El. paštas</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr> 
							<td></td>
							<td><input type="submit" name="Submit" value="Įvesti"></td>
						</tr>
					</table>
				</form>
			</div>


			<div class="bg-secondary ml-3 pb-1">
				<h5 class="bg-secondary mt-5 p-1">Įmonės misijos ir vizijos redagavimas</h5>
				
				<form action="create_about.php" method="get">
					<div class="form-group col-8">
						<label for="misija">Įveskite misiją</label>
						<input type="text" class="form-control" name="misija" placeholder="Misija" required>
					</div>
					<div class="form-group col-8">
						<label for="vizija">Įveskite viziją</label>
						<input type="text" class="form-control" name="vizija" placeholder="Vizija" required>
					</div>
					<div class="col-sm-10 offset-sm-2 mb-5">
						<button type="submit" class="btn btn-dark" name="Submit">Įvesti</button>
					</div>
				</form>
			</div>
	
	<?php } ?>
</body>
</html>