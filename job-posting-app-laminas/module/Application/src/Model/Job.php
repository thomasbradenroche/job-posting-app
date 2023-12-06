<?php

// module/Application/src/Model/Job.php

namespace Application\Model;

class Job
{
    protected $id;
    protected $title;
    protected $description;
    protected $company;
    protected $location;
    protected $datePosted;

    // Constructor
    public function __construct()
    {
        $this->datePosted = new \DateTime();
    }

    // Getter and setter methods for properties
    // Add any additional methods you may need

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    public function getDatePosted()
    {
        return $this->datePosted;
    }

    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
        return $this;
    }
}