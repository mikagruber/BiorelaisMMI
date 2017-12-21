<?php

$formulaireEnregistrerProducteur = new Formulaire('post', 'index.php','fEnregistrementProducteur','fEnregistrementProducteur');


$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('id', 'Entrer l\'identifiant du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputTexte('id', 'id', '', 1, '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();


$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('password', 'Mot de passe du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputMdp('password', 'password', '', '', '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('nom', 'Nom du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputTexte('nom', 'nom', '',1, '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('adresse', 'Adresse du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputTexte('adresse', 'adresse', '',1, '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('mail', 'Mail du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputTexte('mail', 'mail', '',1, '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerLabelFor('descriptif', 'Descriptif du producteur : '));
$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputTexte('descriptif', 'descriptif', '',1, '', 0));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->ajouterComposantLigne($formulaireEnregistrerProducteur->creerInputSubmit('enregistrementProducteur',"enregistrementProducteur","Valider"));
$formulaireEnregistrerProducteur->ajouterComposantTab();

$formulaireEnregistrerProducteur->creerFormulaire();

if (isset($_POST['id'])) {
  $_SESSION['id']=$_POST['id'];
  $_SESSION['password']=$_POST['password'];
  $_SESSION['nom']=$_POST['nom'];
  $_SESSION['adresse']=$_POST['adresse'];
  $_SESSION['mail']=$_POST['mail'];
  $_SESSION['descriptif']=$_POST['descriptif'];

  ProducteurDAO::insertProducteur($_SESSION['id'],$_SESSION['password'],$_SESSION['nom'],$_SESSION['adresse'],$_SESSION['mail'],$_SESSION['descriptif']);

}


 include_once 'vues/vueEnregistrerProducteur.php'

 ?>
