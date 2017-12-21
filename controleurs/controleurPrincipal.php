<?php
require_once 'configs/param.php';
require_once 'lib/menu.php';
require_once 'lib/formulaire.php';
require_once 'lib/tableau.php';
require_once 'lib/dispatcher.php';
require_once 'modeles/dao.php';

if(isset($_GET['biorelaisMP'])){
	$_SESSION['biorelaisMP']= $_GET['biorelaisMP'];
}
else
{
	if(!isset($_SESSION['biorelaisMP'])){
		$_SESSION['biorelaisMP']="accueil";
	}
}

$messageErreurConnexion ='';
if(isset($_POST['login'] , $_POST['mdp'])){
    $unePersonne = new personne($_POST['login'] ,'','','', $_POST['mdp'],'');
    $_SESSION['identification'] = personneDAO::verification($unePersonne);
		$_SESSION['personne'] = $unePersonne;
    if($_SESSION['identification']){
        $_SESSION['biorelaisMP']="accueil";
				$_SESSION['personne'] = personneDAO::lire($unePersonne);
    }
    else {
        $messageErreurConnexion = 'Login ou mot de passe incorrect !';
    }
}

        $messageErreurInscription = 'Erreur lors de l\'inscription';

$biorelaisMP= new Menu("biorelaisMP");
$biorelaisMP -> ajouterComposant($biorelaisMP-> creerItemLien("Accueil", "accueil"));
$biorelaisMP -> ajouterComposant($biorelaisMP-> creerItemLien("Produits", "produits"));
if(isset($_SESSION['identification']) && $_SESSION['identification']){
	$biorelaisMP -> ajouterComposant($biorelaisMP-> creerItemLien("Enregistrer Producteur", "enregistrerProducteur"));
  $biorelaisMP -> ajouterComposant($biorelaisMP-> creerItemLien("Compte", "compte"));
	$biorelaisMP -> ajouterComposant($biorelaisMP->creerItemLien("Se déconnecter", "deconnexion"));
}else
{	$biorelaisMP -> ajouterComposant($biorelaisMP->creerItemLien("Se connecter", "connexion"));
	$biorelaisMP -> ajouterComposant($biorelaisMP->creerItemLien("S'inscrire", "inscription"));

}

$biorelaisMP = $biorelaisMP->CreerMenu($_SESSION['biorelaisMP'],'biorelaisMP');

include_once dispatcher::dispatch($_SESSION['biorelaisMP']);
?>
