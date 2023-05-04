<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="<?= $css ?>" >
</head>

<body>
    <div class="navbar">
        <div class="logo">
           <a href="../index.php"> <img class="controler" src="/dashboard-admin/css/image/Logo_nom.png" alt=""></a>
        </div>
        <a class="a_dashboard" href=""><i class="uil uil-sign-out-alt"></i> Déconnexion</a>
    </div>
    <main>
        <div class="container_menu">
            <div class="menu">
                <div class="identifiant">
                    <div class="img_menu"><img src="" alt=""></div>
                    <div class="user_name">Franck Quirin</div>
                    <div class="id">ID Admin 0000</div>
                </div>
                <nav class="link_menu">
                    <h3 class="h3_menu"><a class="a_menu" href="/dashboard-admin/new_project/index.php">Nouveau projet <i class="uil uil-plus"></i></a></h3>
                    <h3 class="h3_menu"><a class="a_menu" href="">Mes scenarios <i class="uil uil-angle-right-b"></i></a></h3>
                    <h3 class="h3_menu"><a class="a_menu" href="/dashboard-admin/player/index.php">Mes joueurs <i class="uil uil-angle-right-b"></i></a></h3>
                    <h3 class="h3_menu"><a class="a_menu" href="">Les badges </a></h3>
                    <h3 class="h3_menu"><a class="a_menu" href="">Tutoriels</a></h3>
                </nav>
            </div>
            <div class="footer_menu">
                <a class="a_dashboard" href=""> Paramètre <i class="uil uil-setting"></i></a>
                <div>
                    <!-- <a href=""><i class="uil uil-moon"></i></a>
                    <a href=""><i class="uil uil-sun"></i></a> -->
                    <div class="navbtns">
                <!-- Theme change button -->
                <i class="uil uil-moon change-theme" id="theme-button"></i>
            </div>
                </div>
            </div>

        </div>
        <div class="dashboard">