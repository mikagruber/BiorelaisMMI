<?php


	//--------------------------------------------------------
	//formulaire inscription
	//--------------------------------------------------------
	$formulaireInscription = new Formulaire('post', 'index.php', 'fInscription', 'Inscription');
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('identifiant', 'Identifiant :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('login', 'login', ''   , 1, '',0),1);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('mdp', 'Mot de passe :'), 1);
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputMdp('mdp', 'mdp', '' ,'', 0));
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('nom', 'Nom :'));
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('nom', 'nom', '',1, '', 0));
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('adresse', 'Adresse :'));
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('adresse', 'adresse', '',1, '', 0));
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabelFor('mail', 'Mail :'));
	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerInputTexte('mail', 'mail', '',1, '', 0));
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription-> creerInputSubmit('submitConnex', 'submitConnex', 'Valider'),2);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->ajouterComposantLigne($formulaireInscription->creerLabel($messageErreurInscription, "messageErreurInscription"),2);
	$formulaireInscription->ajouterComposantTab();

	$formulaireInscription->creerFormulaire();

	$unePersonne = new personne($_POST['login'], $_POST['mdp'], $_POST['nom'], $_POST['adresse'], $_POST['mail'], '');
	$_SESSION['inscription'] = personneDAO::ajouter($unePersonne);

	include_once 'vues/vueInscription.php';

?>
