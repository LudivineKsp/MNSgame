<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- ============= CSS =============== -->
        <link rel="stylesheet" href="css/register.style.css">
    <title>MNS GAME</title>
</head>
<body>

<!-- ============= HEADER =============== -->
<header>
    <div class="header-container">
        <div class="logo-container">
            <img class="mns-logo" src="/img/game-logo-orange.png" alt="logo_MNSGAME">
            <h1 class="mns-game">MNS GAME</h1>
        </div>
        <button class="nav__link active-link"> 
            <i class="uil uil-user-circle user-icon"></i>
        </button>
    </div>
</header>

<div class="register">
  <div class="container">
    <div class="title">Formulaire d'inscription</div>
    <div class="content">

      <form action="/register-post.php" method="POST">
        <div class="user-details">

          <div class="input-box details">
            <label>Nom</label>
            <input type="text" name="name-register" required>
          </div>

          <div class="input-box details">
            <label>Prenom</label>
            <input type="text" name="firstname-register" required>
          </div>

          <div class="input-box">
            <label>Email</label>
            <input type="email" name="email-register" value="<?= $_SESSION['email-register'] ?>" required>
          </div>

          <div class="input-box">
            <label>ID Admin</label>
            <input type="text" name="id-admin-register" value="<?= $_SESSION['id-admin-register'] ?>" disabled required>
          </div>

          <div class="input-box">
            <label>Date de naissance</label>
            <input type="date" name="birthdate-register" required>
          </div>

          <div class="input-box">
            <label>Mot de passe</label>
            <input type="password" name="pwd-register" required>
          </div>

          <div class="input-box">
            <label>Confirmer votre mot de passe</label>
            <input type="password" name="confirm-pwd-register" required>
          </div>
        </div>

        <div class="gender-details">
          <input type="radio" name="gender-register" id="dot-1" value="Homme">
          <input type="radio" name="gender-register" id="dot-2" value="Femme">
          <input type="radio" name="gender-register" id="dot-3" value="Ne se prononce pas">

          <label class="gender-title">Genre</label>
          <div class="category">

            <label for="dot-1">
                <span class="dot one"></span>
                <span class="gender">Homme</span>
            </label>

            <label for="dot-2">
                <span class="dot two"></span>
                <span class="gender">Femme</span>
            </label>

            <label for="dot-3">
                <span class="dot three"></span>
                <span class="gender">Ne se prononce pas</span>
            </label>

          </div>
        </div>

        <div class="button">
          <input type="submit" name="submit-register-form" id="submit-register-form" value="Inscription">
        </div>
      </form>

    </div>
  </div>
</div>
</body>
</html>

