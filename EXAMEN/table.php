<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 /*******pour les trouver informations******* */
<table border="1" cellspacing="0" width="900" align="center">
	/******* pour la ligne de henttete******/
	<tr style="background-color:green;color: white" align="center">
		<td>N</td>
		<td>MAT</td>
		<td>NOM</td>
		<td>PASSE</td>
		<td>PRENOM</td>
		<td>SEXE</td>
		<td>DATE</td>
		<td>NIVEAU</td>
		<td>CONTACT</td>
		<td>ACTION</td>
	</tr>

<?php 

// pour les trouver informations du nombres utilisateurs connecter a ta base de donne
$abc=new PDO('mysql:host=localhost;dbname=ecole','root','');

$cherche=$abc->query("SELECT * from information");

$compte=1;
$voir='voir';
while ($trouve=$cherche->fetch()) { ?>
<tr  align="center">
		<td><?php echo $compte++; ?></td>
		<td><?php echo $trouve['matricule']; ?></td>
		<td><?php echo $trouve['firstname']; ?></td>
		<td><?php echo $trouve['passe']; ?></td>
		<td><?php echo $trouve['lastname']; ?></td>
		<td><?php echo $trouve['sexe']; ?></td>
		<td><?php echo $trouve['date']; ?></td>
		<td><?php echo $trouve['level']; ?></td>
		<td><?php echo $trouve['contact']; ?></td>
		<td><a href="voir.php?toto=<?php echo $trouve['matricule'];?>">voir plus</a></td> /******pour le lien voir plus**** */
	</tr>
<?php 

}

 ?>

		
</table>
</body>
</html>