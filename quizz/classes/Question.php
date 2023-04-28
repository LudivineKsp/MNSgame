<?php

class Question {

    private int $id_question;
    private string $texte_question;
    private string $image_question;
    private int $ordre_question;
    private int $id_scenario;
    private array $answers;

    public function hydrate(array $data) { 

        $this->id_question = $data['id_question'];
        $this->id_scenario = $data['id_scenario'];

        $this
        ->setTexteQuestion($data['texte_question'])
        ->setImageQuestion($data['image_question'])
        ->setOrdreQuestion($data['ordre_question']);     
    }
   

    /**
     * Get the value of id_question
     */ 
    public function getIdQuestion()
    {
        return $this->id_question;
    }

    /**
     * Get the value of id_scenario
     */ 
    public function getIdScenario()
    {
        return $this->id_scenario;
    }

    /**
     * Get the value of texte_question
     */ 
    public function getTexteQuestion()
    {
        return $this->texte_question;
    }

    /**
     * Set the value of texte_question
     *
     * @return  self
     */ 
    public function setTexteQuestion($texte_question)
    {
        $this->texte_question = $texte_question;

        return $this;
    }

    /**
     * Get the value of image_question
     */ 
    public function getImageQuestion()
    {
        return $this->image_question;
    }

    /**
     * Set the value of image_question
     *
     * @return  self
     */ 
    public function setImageQuestion($image_question)
    {
        $this->image_question = $image_question;

        return $this;
    }

    /**
     * Get the value of ordre_question
     */ 
    public function getOrdreQuestion()
    {
        return $this->ordre_question;
    }

    /**
     * Set the value of ordre_question
     *
     * @return  self
     */ 
    public function setOrdreQuestion($ordre_question)
    {
        $this->ordre_question = $ordre_question;

        return $this;
    }

    /**
     * Get the value of choices
     */ 
    public function getAnswers()
    {
        return $this->answers;
    }

    public function addAnswer(Answer $answer)
    {
        $this->answers[] = $answer;
    }
}