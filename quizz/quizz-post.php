<?php
require 'classes/Scenario.php';
require 'classes/Question.php';
require 'classes/Answer.php';

require 'includes/inc-db-connect.php';

if(!empty($_POST['validation-btn'])) {

    $id_question = $_POST['id_question'];
    $sql = "SELECT * FROM question WHERE id_question = $id_question";
    $result = $dbh->query($sql);
    $question = $result->fetch();

    $id_reponse = $_POST['id_reponse'];
    $sql = "SELECT * FROM reponse WHERE id_reponse = $id_reponse";
    $result = $dbh->query($sql);
    $reponse = $result->fetch();

    $reponseObject = new Answer;
    $reponseObject->hydrate($reponse);

    if($reponseObject->getIsGood() == 1){
        echo("Bonne réponse");
        exit;
    } else {
        echo("Mauvaise Réponse");
        exit;
    }

    echo("Location : /quizz/quizz.php?id_question=".$reponseObject->getIdQuestionReponseQuestionSuivante());
    header("Location: /quizz/quizz.php?id_question=".$reponseObject->getIdQuestionReponseQuestionSuivante()); exit;
}