<?php
session_start();
require 'includes/inc-db-connect.php';


if(!empty($_POST['login-btn'])) {

    $errors = [];

    if(empty($_POST['email-login'])) {
        $errors["email-login"] = "Saississez votre email.";
        header("Location: /");
        die;
    }

    if(empty($_POST['psw-login'])) {
        $errors['psw-login'] = "Saississez votre mot de passe.";
        header("Location: /");
        die;
    }
        

    
    if(count($errors) > 0) {
        $_SESSION['errors'] = $errors;
        $_SESSION['values'] = $_POST;
        header("Location: /");
    }


    echo "On cherche le user";
    // 1. On cherche en base de donnée l'utilisateur avec son email
    $email = htmlspecialchars($_POST['email-login']);
    $password = htmlspecialchars($_POST['psw-login']); 

    $sql = "SELECT * FROM utilisateur WHERE email_utilisateur = '" . $email . "'";       
    $result = $dbh->query($sql);
    $user = $result->fetch(PDO::FETCH_ASSOC);


    // 2. On test si l'utilisateur existe
    if($user) {        

        // 4. S'il existe alors on compare les mots de passes
        if(password_verify($password, $user['mdp_utilisateur']))
        {
            // 5. Si mdp OK alors on identifie l'utilisateur en SESSION et on redirige vers le dashboard
            session_start();

            // On stock les infos de l'utilisateur en session
            $_SESSION['user'] = [
                'id' => $user['id_utilisateur'],
                'firstname' => $user['prenom_utilisateur'],
                'is_admin' => $user['is_admin'] == 1 ? true : false,
            ];

            // On redirige l'utilisateur vers son dashboard
            if ($user['is_admin']){
                header("Location: /admin.php");

            } else {
                header("Location: /");
            }

        } else { // 6. Si mdp KO alors on redirige vers la page de login
        
            $_SESSION['error'] = "Identifiants invalides.";
            header("Location: /");
        }

    } else {  // 3. S'il n'existe pas, on redirige vers la page de login
    
        $_SESSION['error'] = "Identifiants invalides.";
        header("Location: /");
    }    

}