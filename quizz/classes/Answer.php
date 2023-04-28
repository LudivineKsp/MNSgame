<?php

class Answer {

    private int $id_reponse;
    private string $texte_reponse;
    private bool $is_good;
    private float $nb_point;
    private int $id_question;
    private int $id_question_reponse_question_suivante;

    public function hydrate(array $data) { 

        $this->id_reponse = $data['id_reponse'];
        $this->id_question = $data['id_question'];
        $this->id_question_reponse_question_suivante = $data['id_question_reponse_question_suivante'];

        $this
        ->setTexteReponse($data['texte_reponse'])
        ->setIsGood($data['is_good'])
        ->setNbPoint($data['nb_point']);     
    }
    

    /**
     * Get the value of id_reponse
     */ 
    public function getIdReponse()
    {
        return $this->id_reponse;
    }

    /**
     * Get the value of id_question
     */ 
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    /**
     * Get the value of id_question_reponse_question_suivante
     */ 
    public function getIdQuestionReponseQuestionSuivante()
    {
        return $this->id_question_reponse_question_suivante;
    }

    /**
     * Get the value of texte_reponse
     */ 
    public function getTexteReponse()
    {
        return $this->texte_reponse;
    }

    /**
     * Set the value of texte_reponse
     *
     * @return  self
     */ 
    public function setTexteReponse($texte_reponse)
    {
        $this->texte_reponse = $texte_reponse;

        return $this;
    }

    /**
     * Get the value of is_good
     */ 
    public function getIsGood()
    {
        return $this->is_good;
    }

    /**
     * Set the value of is_good
     *
     * @return  self
     */ 
    public function setIsGood($is_good)
    {
        $this->is_good = $is_good;

        return $this;
    }

    /**
     * Get the value of nb_point
     */ 
    public function getNbPoint()
    {
        return $this->nb_point;
    }

    /**
     * Set the value of nb_point
     *
     * @return  self
     */ 
    public function setNbPoint($nb_point)
    {
        $this->nb_point = $nb_point;

        return $this;
    }
}