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
        echo "<li>$name</li>";
        echo "<li>$surnname</li>";
        echo "<li>$dateOfBirth</li>";
        echo "<li>$gender</li>";
        echo "</ul>";
    }
}