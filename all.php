<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="foot.css">

	<style>
		body{
	background-repeat: no-repeat;
	background-attachment: fixed;
}
	</style>
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
<?php
try {
		$com = new PDO('mysql:host=localhost;dbname=marathon','root','');
	} catch (Exeption $e) {
		die('erreur : '.$e->POSTMessage());
	}

	$sql="SELECT * FROM athlete  WHERE sexAthlete = 'male' OR sexAthlete = 'female'";
	
	$result= $com->query($sql);

?>


<table class="table" align="center" style="width: 900PX;height: 480px;top: 100px;background-color: rgb(290, 290, 290 ,0.66);text-align: center;">
  <thead class="table-dark">
  	<th>nom</th><th>prenom</th><th>sex</th><th>age</th><th>pays</th><th>meilleur chrono</th>
  </thead>
  <tbody>
<?php
while($tabAthlete=$result->Fetch()) {
?>
<tr><td><?=$tabAthlete['nomAthlete']?></td><td><?=$tabAthlete['prenomAthlete']?></td><td><?=$tabAthlete['sexAthlete']?></td><td><?=$tabAthlete['ageAthlete']?></td><td><?=$tabAthlete['payAthlete']?></td><td><?=$tabAthlete['mcAthlete']?></td></tr>
<?php
}
?>
  </tbody>
</table>
</body>
</html>