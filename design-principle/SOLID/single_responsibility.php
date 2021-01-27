<?php
//Single Responsibility Principle
class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAnimalName()
    {
        $this->name;
    }
}

class AnimalDB{
    public function getAnimal()
    {
        //get animal
    }

    public function saveAnimal()
    {
        //save animal
    }
}


/** Concepts */
//higher cohesion
//loose coupling
//Only one reasons for Change