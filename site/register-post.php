<?php
require 'includes/inc-db-connect.php';

session_start();
unset($_SESSION['error']);

if(!empty($_POST['register-btn'])) {

    include 'includes/inc-db-connect.php';

    // On vérifie que l'utilisateur n'existe pas et que l'ID Admin est correct
    $sql = "SELECT * FROM utilisateur WHERE email_utilisateur = :email";
    $query = $dbh->prepare($sql);
    $res = $query->execute([
        'email' => $_POST['email-register']
    ]);

    // if($query->rowCount() > 0) {
        // Je relance le script de la modal en passant les erreurs en session 


    // } else {
    // On redirige vers le formulaire d'inscription si aucun utilisateur ne possède l'adresse mail
        session_start();
        $_SESSION['email-register'] = $_POST['email-register'];
        $_SESSION['id-admin-register'] = $_POST['id-admin-register'];
        header("Location: /register.php"); die;
    }
// }

if(!empty($_POST['submit-register-form']))
{

    $errors = [];

    // // On vérifie tous les champs du formulaire

    if(empty($_POST['name-register']))
        $errors['name-register'] = "Votre nom est obligatoire.";

    if(empty($_POST['firstname-register']))
        $errors['firstname-register'] = "Votre prénom est obligatoire.";


    if(empty($_POST['email-register']))
        $errors['email-register'] = "Votre email est obligatoire.";

    if(empty($_POST['pwd-register']))
        $errors['pwd-register'] = "Le mot de passe est obligatoire.";

    if(empty($_POST['confirm-pwd-register']))
        $errors['confirm-pwd-register'] = "Le mot de passe est obligatoire.";

    if(empty($_POST['birthdate-register']))
        $errors['birthdate-register'] = "La date de naissance est obligatoire.";

    if($_POST['pwd-register'] != $_POST['confirm-pwd-register'])
        $errors['confirm-pwd-register'] = "Les mots de passe ne sont pas identiques.";


    if(count($errors) > 0)
    {
    $_SESSION['errors'] = $errors;
    $_SESSION['values'] = $_POST;
    header("Location: /register.php"); die;
    }

    include 'includes/inc-db-connect.php';

    // On vérifie que l'utilisateur n'existe pas
    $sql = "SELECT * FROM utilisateur WHERE email_utilisateur = :email";
    $query = $dbh->prepare($sql);
    $res = $query->execute([
        'email' => $_POST['email-register']
    ]);

    if($query->rowCount() > 0) {
        $_SESSION['error'] = "Un utilisateur existe déjà avec cette adresse email.";
        header("Location: /register.php"); die;

    }

    // On insère l'utilisateur en BDD
    $sql = "INSERT INTO utilisateur (nom_utilisateur, prenom_utilisateur, anniversaire_utilisateur, email_utilisateur, mdp_utilisateur, genre_utilisateur, date_inscription_utilisateur)
        VALUES (:nom_utilisateur, :prenom_utilisateur, :anniversaire_utilisateur, :email_utilisateur, :mdp_utilisateur, 
                    CASE :genre_utilisateur
                    WHEN 'Homme' THEN 'Homme'
                    WHEN 'Femme' THEN 'Femme'
                    WHEN 'Ne se prononce pas' THEN 'Ne se prononce pas'
                    END, 
                    :date_inscription_utilisateur)";

        $query = $dbh->prepare($sql);
        $res = $query->execute([
            'nom_utilisateur' => $_POST['name-register'],
            'prenom_utilisateur' => $_POST['firstname-register'],
            'anniversaire_utilisateur' => $_POST['birthdate-register'],
            'email_utilisateur' => $_POST['email-register'],
            'mdp_utilisateur' => password_hash($_POST['pwd-register'], PASSWORD_DEFAULT),
            'genre_utilisateur' => $_POST['gender-register'],
            'date_inscription_utilisateur' => date('Y-m-d')
        ]);

    if($res)
    {
        header("Location: /admin.php"); exit;
    }
    else
    {
        //$_SESSION['error'] = "Un erreur est survenue.";
        header("Location: /register.php"); die;
    }
    
}
