<?php

class Scenario {

    private int $id_scenario;
    private string $titre_scenario;
    private string $description_scenario;
    private string $date_publi_scenario;
    private bool $is_oneshoot;
    private bool $is_private;
    private string $image_scenario;
    private bool $skip_question;
    private bool $show_score;
    private bool $send_report;
    private string $temps_estime;
    private string $niveau;
    private int $id_categorie;
    private int $id_utilisateur;
    private array $questions;

    public function hydrate(array $data) { 

        $this->id_scenario = $data['id_scenario'];
        $this->id_utilisateur = $data['id_utilisateur'];

        $this
        ->setTitreScenario($data['titre_scenario'])
        ->setDescriptionScenario($data['description_scenario'])
        ->setDatePubliScenario($data['date_publi_scenario'])
        ->setIsOneshoot($data['is_oneshoot'])
        ->setIsPrivate($data['is_private'])
        ->setImageScenario($data['image_scenario'])
        ->setSkipQuestion($data['skip_question'])
        ->setShowScore($data['show_score'])
        ->setSendReport($data['send_report'])
        ->setTempsEstime($data['temps_estime'])
        ->setNiveau($data['niveau'])
        ->setIdCategorie($data['id_categorie']);       
    }



    public function getIdScenario()
    {
        return $this->id_scenario;
    }


    public function getIdUtilisateur()
    {
        return $this->id_utilisateur;
    }
    
    /**
     * Get the value of titre_scenario
     */ 
    public function getTitreScenario()
    {
        return $this->titre_scenario;
    }

    /**
     * Set the value of titre_scenario
     *
     * @return  self
     */ 
    public function setTitreScenario($titre_scenario)
    {
        $this->titre_scenario = $titre_scenario;

        return $this;
    }

    /**
     * Get the value of description_scenario
     */ 
    public function getDescriptionScenario()
    {
        return $this->description_scenario;
    }

    /**
     * Set the value of description_scenario
     *
     * @return  self
     */ 
    public function setDescriptionScenario($description_scenario)
    {
        $this->description_scenario = $description_scenario;

        return $this;
    }

    /**
     * Get the value of date_publi_scenario
     */ 
    public function getDatePubliScenario()
    {
        return $this->date_publi_scenario;
    }

    /**
     * Set the value of date_publi_scenario
     *
     * @return  self
     */ 
    public function setDatePubliScenario($date_publi_scenario)
    {
        $this->date_publi_scenario = $date_publi_scenario;

        return $this;
    }

    /**
     * Get the value of is_oneshoot
     */ 
    public function getIsOneshoot()
    {
        return $this->is_oneshoot;
    }

    /**
     * Set the value of is_oneshoot
     *
     * @return  self
     */ 
    public function setIsOneshoot($is_oneshoot)
    {
        $this->is_oneshoot = $is_oneshoot;

        return $this;
    }

    /**
     * Get the value of is_private
     */ 
    public function getIsPrivate()
    {
        return $this->is_private;
    }

    /**
     * Set the value of is_private
     *
     * @return  self
     */ 
    public function setIsPrivate($is_private)
    {
        $this->is_private = $is_private;

        return $this;
    }

    /**
     * Get the value of image_scenario
     */ 
    public function getImageScenario()
    {
        return $this->image_scenario;
    }

    /**
     * Set the value of image_scenario
     *
     * @return  self
     */ 
    public function setImageScenario($image_scenario)
    {
        $this->image_scenario = $image_scenario;

        return $this;
    }

    /**
     * Get the value of skip_question
     */ 
    public function getSkipQuestion()
    {
        return $this->skip_question;
    }

    /**
     * Set the value of skip_question
     *
     * @return  self
     */ 
    public function setSkipQuestion($skip_question)
    {
        $this->skip_question = $skip_question;

        return $this;
    }

    /**
     * Get the value of show_score
     */ 
    public function getShowScore()
    {
        return $this->show_score;
    }

    /**
     * Set the value of show_score
     *
     * @return  self
     */ 
    public function setShowScore($show_score)
    {
        $this->show_score = $show_score;

        return $this;
    }

    /**
     * Get the value of send_report
     */ 
    public function getSendReport()
    {
        return $this->send_report;
    }

    /**
     * Set the value of send_report
     *
     * @return  self
     */ 
    public function setSendReport($send_report)
    {
        $this->send_report = $send_report;

        return $this;
    }

    /**
     * Get the value of temps_estime
     */ 
    public function getTempsEstime()
    {
        return $this->temps_estime;
    }

    /**
     * Set the value of temps_estime
     *
     * @return  self
     */ 
    public function setTempsEstime($temps_estime)
    {
        $this->temps_estime = $temps_estime;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get the value of id_categorie
     */ 
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * Set the value of id_categorie
     *
     * @return  self
     */ 
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function getQuestions()
    {
        return $this->questions;
    }

    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

}