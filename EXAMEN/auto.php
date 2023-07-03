<?php 
// ici pour la comparaison et verification entre nom et mot de passe
$abc=new PDO('mysql:host=localhost;dbname=ecole','root','');

$verif=$abc->prepare("SELECT * FROM information where firstname=? AND passe=? ");
$verif->execute(array($_POST['nom'],$_POST['mdp']));
$trouve=$verif->rowcount();

if ($trouve==0) {
echo "MOT DE PASSE OU NOM INCORRECT";
}else{
	header('location:bienvenue.php');
}

 ?>