<?php

$css = "/dashboard-admin/css/style-player.css";
require "../includes/inc-top.php";

?>


<div class="title_dashboard">
    <h1>Mes joueurs</h1>
</div>
<table class="player_container">
    <thead class="title_container">
        <tr class="player_title">
            <th>Nom</th>
            <th>Prenom</th>
            <th class="email">Adresse mail</th>
            <th>Groupe</th>
            <th>Roles</th>
            <th>Trier par <i class="uil uil-angle-right-b"></i></th>
        </tr>
    </thead>
    <tbody class="player_list">
        <tr class="player">
            <td>Kasper</td>
            <td>Ludivine</td>
            <td class="email">Ludivine.kasper@truc.com</td>
            <td>Dev 1</td>
            <td>Joueur</td>
            <td class="show_more"><a href="" >Voir plus <i class="uil uil-angle-right-b"></i></a></td>
        </tr>
        <tr class="player">
            <td>Kasper</td>
            <td>Ludivine</td>
            <td class="email">Ludivine.kasper@truc.com</td>
            <td>Dev 1</td>
            <td>Joueur</td>
            <td class="show_more"><a href="" >Voir plus <i class="uil uil-angle-right-b"></i></a></td>
        </tr>
        <tr class="player">
            <td>Kasper</td>
            <td>Ludivine</td>
            <td class="email">Ludivine.kasper@truc.com</td>
            <td>Dev 1</td>
            <td>Joueur</td>
            <td class="show_more"><a href="" >Voir plus <i class="uil uil-angle-right-b"></i></a></td>
        </tr>
        <tr class="player">
            <td>Kasper</td>
            <td>Ludivine</td>
            <td class="email">Ludivine.kasper@truc.com</td>
            <td>Dev 1</td>
            <td>Joueur</td>
            <td class="show_more"><a href="" >Voir plus <i class="uil uil-angle-right-b"></i></a></td>
        </tr>
    </tbody>

</table>

<?php
require "../includes/inc-bottom.php";
?>