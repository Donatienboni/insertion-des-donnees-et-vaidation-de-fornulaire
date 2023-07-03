<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="etat1">
	<h1 class="etat2">INSCRIPTION EN FORCO</h1>
<form action="traitement.php" method="POST">
	<input type="text" name="nom" placeholder="Saisir le nom"> 

	<input type="text" name="prenom" placeholder="Saisir le prenom"> <br><br>

	<input type="date" name="date"> <input type="text" placeholder="adress" name="adresse"> <br><br>
	<input type="radio" name="sexe" value="masculin">Masculin<input type="radio" name="sexe" value="feminin">Feminin 
	<select name="niveau">
		<option>DTS</option>
		<option>Licence</option>
		<option>Doctorat</option>
	</select> <br><br>

		<input type="number" placeholder="numero de telephone" name="contact"> <input type="password" placeholder="votre mot de passe " name="mdp"> <br><br>

	<input type="submit" class="etat3" name="" value="ENREGISTRER">
	<input type="reset" name="" class="etat4" value="ANNULER">

</form>
</body>
</html>