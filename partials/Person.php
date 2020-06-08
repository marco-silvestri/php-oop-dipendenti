<?php

class Person {
    public $name;
    public $surname;
    public $dateOfBirth;
    public $gender;

    public function __construct($_name, $_surname, $_dateOfBirth, $_gender){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateOfBirth = $_dateOfBirth;
        $this->gender= $_gender;
    }

    public function showAnagraphical(){
        echo "<ul>";
        echo "<li>{$this->name}</li>";
        echo "<li>{$this->surname}</li>";
        echo "<li>{$this->dateOfBirth}</li>";
        echo "<li>{$this->gender}</li>";
        echo "</ul>";
    }
}