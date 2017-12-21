<?php
$unePersonne = $_SESSION['personne'];

$formulaireCompte = new Formulaire('post','index.php','formuCompte','Compte');
$uncomposant=$formulaireCompte->creerLabelFor('id1','Identifiant :');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);

$uncomposant=$formulaireCompte->creerInputTexte('id','id', $unePersonne->getId() , 1,'',0);
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerLabelFor('nom1','Nom :');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);

$uncomposant=$formulaireCompte->creerInputTexte('nom','nom', $unePersonne->getNom() , 1,'',0);
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerLabelFor('adresse1','Adresse :');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);

$uncomposant=$formulaireCompte->creerInputTexte('adresse','adresse', $unePersonne->getAdresse() , 1,'',0);
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerLabelFor('mail1','Adresse mail :');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);

$uncomposant=$formulaireCompte->creerInputTexte('mail','mail', $unePersonne->getMail() , 1,'',0);
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerLabelFor('password1','Mot de passe :');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);

$uncomposant=$formulaireCompte->creerInputTexte('password','password', $unePersonne->getPassword() , 1,'',0);
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerInputSubmit('modifier','modifier','modifier');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();

$uncomposant=$formulaireCompte->creerInputSubmit('supprimer','supprimer','supprimer');
$formulaireCompte->ajouterComposantLigne($uncomposant,1);
$formulaireCompte->ajouterComposantTab();


$formulaireCompte->creerFormulaire();

$unePersonne = new personne($_POST['id'], $_POST['mdp'], $_POST['nom'], $_POST['adresse'], $_POST['mail'], '');
$_SESSION['identification'] = personneDAO::ajouter($unePersonne);
$_SESSION['identification'] = personneDAO::modifier($unePersonne);
$_SESSION['identification'] = personneDAO::supprimer($unePersonne);

include_once 'vues/vueCompte.php';

?>
