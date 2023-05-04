<?php

$css = "/dashboard-admin/css/style-new-projet.css";

require $_SERVER['DOCUMENT_ROOT'] . '/dashboard-admin/includes/inc-top.php';
require $_SERVER['DOCUMENT_ROOT'] . '/dashboard-admin/includes/inc-db-connect.php';

//  $sql = "INSERT INTO scenario (titre_scenario, description_scenario, temps_estime, niveau , date_publi_scenario) 
//  VALUES (:titre_scenario, :description_scenario, :temps_estime, :niveau , NOW() )";
//  $query = $dbh->prepare($sql);
//  $res = $query->execute([
//      'titre_scenario' => $_POST['titre_scenario'],
//      'description_scenario' => $_POST['description_scenario'],
//      'temps_estime' => $_POST['temps_estime'],
//      'niveau' =>$_POST['niveau']
//  ]);
?>
<div class="title_dashboard">
    <h1>Commencez un nouveau projet</h1>
</div>
<div class="new_container">
    <div class="general">
        <h2 class="title_general">Paramètres généraux</h2>
        <div class="container_general">
            <div class="input_projet">
                <label for="">Titre du projet</label>
                <input type="text" name="">
            </div>
            <div class="input_projet">
                <label for="">Catégorie</label>
                <input type="text" name="">
            </div>
            <div class="input_projet">
                <label for="">Durée estimée (en minute)</label>
                <input type="text" name="">
            </div>
            <div class="input_projet">
                <label for="">Niveau</label>
                <input type="text" name="">
            </div>
            <div class="textarea_projet">
                <label for="">Description du projet</label>
                <textarea type="text" name=""></textarea>
            </div>
        </div>
    </div>
    <div class="advanced">
        <h2 class="title_advanced">Paramètres avancés</h2>
        <div class="container_advanced">
            <div class="check">
                <label for="">Rejouabilité</label>
                <label class="switch">
                    
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="check">
                <label for="">  Affichage des scores en jeu</label>
                <label class="switch">
                  
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="check">
                <label for="">Privée</label>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="check">
                <label for=""> Envoie du compte rendu</label>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
            <div class="check">
                <label for=""> Autorisé a passer des questions</label>
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <a href="" class="start_projet"><input type="submit" value="Démarrer la conception"><i class="uil uil-arrow-right"></i></a>
    </div>
</div>




<?php
require $_SERVER['DOCUMENT_ROOT'] . '/dashboard-admin/includes/inc-bottom.php';
?>