<?php

class Docter
{
    private $id;
    private $nameDocter;
    private $specialty;

    public function __construct($id, $nameDocter, $specialty)
    {
        $this->id = $id;
        $this->nameDocter = $nameDocter;
        $this->specialty = $specialty;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNameDocter($nameDocter)
    {
        $this->nameDocter = $nameDocter;
    }

    public function getNameDocter()
    {
        return $this->nameDocter;
    }

    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    public function getSpecialty()
    {
        return $this->specialty;
    }
}
