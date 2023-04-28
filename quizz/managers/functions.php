<?php

function getFirstQuestion(){
    $dbh = $GLOBALS['dbh'];
    $sql = "SELECT * FROM question WHERE id_scenario = 1 ORDER BY ordre_question LIMIT 1"; 
    $result = $dbh->query($sql);
    return $result->fetch();
}

function getQuestionById(int $id){

    $dbh = $GLOBALS['dbh'];
    $sql = "SELECT * FROM question WHERE id_question = $id"; 
    $result = $dbh->query($sql);
    return $result->fetch();
}

function getResponsesById(int $id){
    $dbh = $GLOBALS['dbh'];
    $sql = "SELECT * FROM reponse WHERE id_question = $id"; 
    $result = $dbh->query($sql);
    return $result->fetchAll();
}
