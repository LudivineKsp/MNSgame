<?php

require 'classes/Scenario.php';
require 'classes/Question.php';
require 'classes/Answer.php';

require 'includes/inc-db-connect.php';
require 'managers/functions.php';

// On récupère la première question du scénario
$question = getFirstQuestion();

if(isset($_GET['id_question'])){
    $question = getQuestionById($_GET['id_question']);
}

$questionObject = new Question;
$questionObject->hydrate($question);

// Pour chaque question, on récupère les réponses correspondantes

$reponses = getResponsesById($questionObject->getIdQuestion());

$reponseCollection = [];

foreach($reponses as $reponse) {
    $reponseObject = new Answer;
    $reponseObject->hydrate($reponse);
    $reponseCollection[] = $reponseObject; // tableau d'objets
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="/quizz/css/quizz.css">
    <title>Quizz Time</title>
</head>
<body>

<header>

    <div class="header-container">

        <button class="exit-btn">
            <i class="uil uil-angle-left exit-btn-arrow"></i>
            Quitter           
        </button>

        <img class="mns-logo" src="/site/img/game-logo-orange.png" alt="logo_MNSGAME">

        <div class="timer">
            <div class="timer-container">
                <div class="timer-circle">
                    <div class="timer-text">
                        <span id="seconds" class="seconds">30</span>
                        <span>sec</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>

<form action="quizz-post.php" method="POST">
    <div class="question-container">
        <h1 class="question" id="question"><?= $questionObject->getTexteQuestion() ?></h1>
        <input type="hidden" name="id_question" value="<?= $questionObject->getIdQuestion() ?>">
    </div>

    <div class="answer-container">

        <label class="answer-content"> 
            <input type="radio" id="first-answer" name="id_reponse" value="<?= $reponseCollection[0]->getIdReponse() ?>">
            <h3 class="answer" ><?= $reponseCollection[0]->getTexteReponse() ?></h3>
        </label>

        <label class="answer-content"> 
            <input type="radio" id="second-answer" name="id_reponse" value="<?= $reponseCollection[1]->getIdReponse() ?>">
            <h3 class="answer" ><?= $reponseCollection[1]->getTexteReponse() ?></h3>
        </label>

    </div>

    <input type="submit" class="validation-btn" id="validation-btn" value="Suivant" name="validation-btn">
           
</form>
   
<script type="text/javascript" src="/quizz/js/quizz.js" defer></script>
</body>
</html>