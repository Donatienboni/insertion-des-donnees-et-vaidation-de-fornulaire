<?php
// recuper les informatien et envoier dans le tableau
$abc=new PDO('mysql:host=localhost;dbname=ecole','root','');

$select=$abc->prepare("SELECT * from information WHERE matricule=?" );
$select->execute(array($_GET['toto']));
$trouve=$select->fetch();

echo "NOM :" .$trouve['firstname']. "<br><br>" ;
echo "MOT DE PASSE :" .$trouve['passe']. "<br><br>" ;
echo "PRENOM :" .$trouve['lastname']. "<br><br>" ;
echo "SEXE :" .$trouve['sexe']. "<br><br>" ;
echo "DATE :" .$trouve['date']. "<br><br>" ;
echo "NIVEAU :" .$trouve['level']. "<br><br>" ;
echo "CONTACT :" .$trouve['contact']. "<br><br>" ;
?>
