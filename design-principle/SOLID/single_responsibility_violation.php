<?php
//Single responsibility principle violation
class Animal {
    private $name;

    /**
     * Animal constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAnimalName()
    {
        // get name
    }

    public function saveAnimal()
    {
        //save
    }
}
