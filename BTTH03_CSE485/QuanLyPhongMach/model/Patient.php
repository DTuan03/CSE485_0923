<?php

class Patient
{
    private $id;
    private $namePatient;
    private $date;
    private $symptom;
    private $idDocter;

    public function __construct($id, $namePatient, $date, $symptom, $idDocter)
    {
        $this->id = $id;
        $this->namePatient = $namePatient;
        $this->date = $date;
        $this->symptom = $symptom;
        $this->idDocter = $idDocter;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNamePatient($namePatient)
    {
        $this->namePatient = $namePatient;
    }

    public function getNamePatient()
    {
        return $this->namePatient;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setSymptom($symptom)
    {
        $this->symptom = $symptom;
    }

    public function getSymptom()
    {
        return $this->symptom;
    }
    public function setIdDocter($idDocter)
    {
        $this->idDocter = $idDocter;
    }

    public function getIdDocter()
    {
        return $this->idDocter;
    }
}
