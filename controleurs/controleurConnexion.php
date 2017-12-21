<?php

//--------------------------------------------------------
//formulaire connexion
//--------------------------------------------------------
	$formulaireConnexion = new Formulaire('post', 'index.php', 'fConnexion', 'Connexion');
	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('identifiant', 'Identifiant :'), 1);
	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputTexte('login', 'login', ''   , 1, '',0),1);
	$formulaireConnexion->ajouterComposantTab();

	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabelFor('mdp', 'Mot de passe :'), 1);
	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerInputMdp('mdp', 'mdp', '' ,'', 0));
	$formulaireConnexion->ajouterComposantTab();

	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider'),2);
	$formulaireConnexion->ajouterComposantTab();

	$formulaireConnexion->ajouterComposantLigne($formulaireConnexion->creerLabel($messageErreurConnexion, "messageErreurConnexion"),2);
	$formulaireConnexion->ajouterComposantTab();

	$formulaireConnexion->creerFormulaire();

	include_once 'vues/vueConnexion.php';

?>
