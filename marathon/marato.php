<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="foot.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<title></title>
</head>
<body background="kech.jpg">
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  	<a class="navbar-brand" href="http://localhost/home">
      <img src="mara.jpg" alt="" width="37" height="29" class="d-inline-block align-text-top">
      Marathon
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="http://localhost/marato.php">Inscription</a>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          	List d'athlete
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="http://localhost/male">male</a></li>
            <li><a class="dropdown-item" href="http://localhost/female">female</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="http://localhost/all">All</a></li>
          </ul>
        </li>
        <a class="nav-link" href="#">Mise a jour</a>
        <a class="nav-link" href="http://localhost/annuler.php">Annuler</a>
        <a class="nav-link" href="#">Resultat</a>
      </div>
    </div>
  </div>
</nav>

<form method="POST" class="row g-3">
	<table class="table" align="center" style="width: 900PX;height: 480px;top: 100px;background-color: rgb(290, 290, 290 ,0.76);">

<tr style="text-align: center;">
			<td>
<div class="row">
	<div class="col-md-1">
    <label class="form-label">Nom</label></div>
    <div class="col-md-5">
    <input type="text" name="nom" value="" class="form-control" required>
    </div>
    <div class="col-md-1">
    <label class="form-label">Prenom</label></div>
    <div class="col-md-5">
    <input type="text" name="prenom" value="" class="form-control" required></div>
</div>
</tr>

<tr style="text-align: center;">
<td>
<div class="row">
	<div class="col-md-1">
	<label class="form-label">age</label></div>
	<div class="col-md-5">
    <input type="text" name="age" value="" class="form-control" required></div>
    <div class="col-md-1"><label class="form-label">pays</label></div>
    <div class="col-md-5">
				<select class="form-select form-select-sm" aria-label=".form-select-sm example" name="pays" >
					<option>maroc</option>
					<option>italy</option>
					<option>usa</option>
				</select>
			</div>
</div>    
</td></tr>
		<tr>
			<td>
<div class="row">
<div class="col-md-1" >
<fieldset class="row mb-3">
    <legend class="col-form-label col-sm-2 pt-0">&nbsp;&nbsp;sex<abbr title="Ce champ est obligatoire"></abbr></legend>
    </div>
    <div class="col-md-5">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="male" required>
        <label class="form-check-label">male</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" value="female" required>
        <label class="form-check-label">female</label>
      </div>
    </div>
</fieldset>
<div class="col-md-1">
	<label class="form-label">meilleur chrono</label>
</div>
<div class="col-md-5">
<input type="time" name="mc" value="" class="form-control" required>
</div>

</div>
</td>
</tr>
		<tr style="text-align: center;">
			<td>
<div class="row">
	<div class="col-md-1">
    <label class="form-label">login</label></div>
    <div class="col-md-5">
    <input type="text" name="login" value="" class="form-control" required>
    </div>
    <div class="col-md-1">
    <label class="form-label">Password</label></div>
    <div class="col-md-5">
    <input type="password" name="psw" value="" class="form-control" required></div>
</div>
</tr>
		<tr>
			<td>
			<div class="col-8">
    <input name="ok" type="submit" value="Sign in" class="btn btn-outline-dark" required onclick="return message();" >
  </div></td>
		</tr>
</form>
</table>

<!--
<center>
<div class="btn-group btn-group-xs" role="group" arial-label="ffff">
<button type="button" class="btn btn-secondary">1</button>
<button type="button" class="btn btn-secondary">1</button>
<button type="button" class="btn btn-secondary">1</button>
</div>
</center>
-->

<?php

if (isset($_POST['ok'])) {
	try {
		$com = new PDO('mysql:host=localhost;dbname=marathon','root','');
	} catch (Exeption $e) {
		die('erreur : '.$e->POSTMessage());
	}
	if (isset($_POST['nom'])) {
		$nomAthlete=$_POST['nom'];
	}
	if (isset($_POST['prenom'])) {
		$prenomAthlete=$_POST['prenom'];
	}
	if (isset($_POST['age'])) {
		$ageAthlete=$_POST['age'];
	}
	if (isset($_POST['gender'])) {
		$sexAthlete=$_POST['gender'];
	}
	if (isset($_POST['pays'])) {
		$payAthlete=$_POST['pays'];
	}
	if (isset($_POST['mc'])) {
		$mcAthlete=$_POST['mc'];
	}
	if (isset($_POST['login'])) {
		$loginAthlete=$_POST['login'];
	}
	if (isset($_POST['psw'])) {
		$pswAthlete=$_POST['psw'];
	}


	$log="SELECT loginAthlete FROM athlete WHERE loginAthlete = '$loginAthlete'";
	$ex= $com->query($log);
	$zho=$ex->rowCount($ex);
	$nb=0;
	if ($zho==0) {
		$sql= "INSERT INTO athlete VALUES(NULL ,'$nomAthlete', '$prenomAthlete',
	 '$ageAthlete', '$sexAthlete', '$payAthlete', '$mcAthlete',NULL , '$loginAthlete', '$pswAthlete')";
		$nbr= $com->exec($sql);
	}
	elseif ($zho>0) {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    This user is already exist
  </div>
</div>


	<?php
	$nb+=1;
	}
  	
	while($tabAthlete=$ex->Fetch()) {
	}

	//$log="SELECT * FROM marathon WHERE loginAthlete = '$loginAthlete'";PDO::FETCH_ASSOC
	//$result= mysqli_query($com,$sql);
	//$ex= $com->query($log);
	//while ($tabAthlete=$ex->Fetch(PDO::FETCH_ASSOC)) {
	//if (count($loginAthlete)>0) {
		//echo"this user is already existe";
	//}
//}

	//$pass="SELECT idAthlete,loginAthlete,pswAthlete FROM marathon";
	//$ex= $com->query($pass);
	//while ($tabAthlete=$ex->fetch()) {
	//	if($tabAthlete['pswAthlete']==$pswAthlete)
	//		echo"same psw";
	//}

	$dossard=$com->lastInsertId();


if ($nb==0) {
?>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>



<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>

<?php

	echo"vous étes bien inscrire, tu dois porter le dossard numéro: ". $dossard;

}

}
?>

  </div>
</div>


</div>

<!-- <script src="js/jquery.min.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->


</body>
<script type="text/javascript">
	function message()
	{
		alert("User saved succesfully...!");
		return true;
	}
</script>
</html>