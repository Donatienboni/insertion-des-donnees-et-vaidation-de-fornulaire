<?php 
// connxion a le base de donne et envoie des information dans base
$connect=new PDO('mysql:host=localhost;dbname=ecole','root','');


$insert=$connect->prepare("INSERT INTO information(firstname,lastname,date,sexe,contact,level,passe,adresse) VALUES(?,?,?,?,?,?,?,?) ");
$insert->execute(array($_POST['nom'],$_POST['prenom'],$_POST['date'],$_POST['sexe'],$_POST['contact'],$_POST['niveau'],$_POST['mdp'],$_POST['adresse']));

echo "Je suis fort";


 ?>