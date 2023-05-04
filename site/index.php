<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ============= UNICONS =============== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- ============= CSS =============== -->
    <link rel="stylesheet" href="/site/css/style.css">

    <title>MNS GAME</title>
</head>

<body>
    <main>
        <!-- ============= HEADER =============== -->
        <header>
           <div class="header-container">
                <div class="logo-container">
                    <img class="mns-logo" src="/site/img/game-logo-orange.png" alt="logo_MNSGAME">
                    <h1 class="mns-game">MNS GAME</h1>
                </div>
                <button onclick="document.getElementById('modal-form').style.display='block'" class="nav__link active-link"> 
                    <i class="uil uil-user-circle user-icon"></i>
                </button>
           </div>
        </header>

        <!-- Modal -->
        <div class="modal" id="modal-form">
            <h2 class="modal-title">Log In</h2>  
            <div class="modal-content">

            <!-- Login Form -->
                <form action="/site/login-post.php" method="POST">
                    <div class="form-container">
                        <!-- Email -->
                        <input class="modal-input" type="email" id="email-login"  name="email-login" placeholder="Email">
                        <!-- Password -->
                        <input class="modal-input" type="password" id="psw-login" name="psw-login" placeholder="Mot de passe">
                        <label>
                            <input type="checkbox"  name="remember">  Garder ma session active
                        </label>
                        <!-- Submit Button -->
                        <input type="submit" class="form-btn" id="login-btn" name="login-btn" value="Connexion">
                            <a class="forgot-psw" href="#">Mot de passe oublié ?</a>
                    </div>  
                </form>

            <!-- Register Form -->
                <div>
                    <form class="form-container register-form" action="/site/register-post.php" method="POST">
                        <h2 class="modal-subtitle">Pas encore de compte ?</h2>
                            <!-- Email -->
                            <input class="modal-input" type="email"  name="email-register" placeholder="Email">
                            <!-- Password -->
                            <input class="modal-input" type="text" name="id-admin-register" placeholder="ID Admin">
                            <!-- Submit Button -->
                            <input type="submit" class="form-btn" name="register-btn" id="register-btn" value="Inscription">
                    </form>
                </div>

            </div>      
        </div>

    <!-- Homepage Img -->    
        <div class="homepage-img-container">
            <img class="homepage-img" src="https://placehold.co/1440x650" alt="homepage-img">
            <a href="#contact-form" class="homepage-cta-btn">Nous contacter <i class="uil uil-message"></i></a>
        </div>


    <!-- Values -->
        <div class="homepage-values">
            <h2>LUDIQUE</h2>
            <h2>INTERACTIF</h2>
            <h2>INNOVANT</h2>
        </div>

    <!-- Cards --> 
        <div class="homepage-content">

        <!-- Player Card -->
            <div class="homepage-player card-container">
                <img class="card-img" src="https://placehold.co/300x200" alt="">
                <div class="p-container">
                    <p class="card-p">Rejoignez des parties, répondeez aux questions, 
                    suivez votre progression et consultez l'historique de vos parties.</p>
                </div>
                <h2 class="card-title player-title">Joueur</h2>   
            </div>

        <!-- Master Card -->
            <div class="homepage-master card-container">
                <img class="card-img" src="https://placehold.co/300x200" alt="">
                <div class="p-container">
                    <p class="card-p">Créer et de gérer des scénarios, d'inviter des joueurs, de suivre les statistiques, 
                    de générer des rapports et de gérer les utilisateurs.</p>
                </div>
                <h2 class="card-title master-title">Concepteur</h2>
                
            </div>
        </div>

    <!-- Contact Form -->
        <div class="form-container-contact">
            <h2 class="form-title" id="contact-form">Nous contacter</h2>
            <form class="contact-form" action="" method="POST">
                    <!-- Name -->
                    <div class="name-input">
                        <label for="name_input">Prénom</label>
                        <input type="text" name="name" id="name_input">
                    </div>

                    <!-- Firstname -->
                    <div class="firstname-input">
                        <label for="firstname">Nom</label>
                        <input type="text" name="firstname" id="firstname_input">
                    </div>

                    <!-- Email -->
                    <div class="email-input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email_input">
                    </div>

                    <!-- Message -->
                    <div class="message-input">
                        <label for="message">Votre message</label>
                        <textarea name="message" id="message_input" cols="30" rows="5"></textarea>
                    </div>

                <!-- Submit Button -->
                <div class="submit">
                    <button type="submit" class="submit-btn" id="submit-btn">Envoyer</button>
                </div>

            </form>
        </div>
        
            <!-- ============= SCROLL TOP =============== -->

        <button onclick="topFunction()" id="scrollup" class="scrollup"><i class="uil uil-arrow-up arrow-top"></i></button>


        <footer class="homepage-footer">
            <a href="https://www.linkedin.com/in/ludivine-kasper-laas-87729b253/"><i class="uil uil-linkedin-alt linkedin-icon"></i></a>
            <img class="footer-logo" src="/site/img/game-logo-orange.png" alt="logo mns game">
        </footer>

    </main>
    <script type="text/javascript" src="/site/js/script.js"></script>
</body>

</html>s