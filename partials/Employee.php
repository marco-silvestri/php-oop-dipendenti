<?php

include_once __DIR__ . '/Person.php';

class Employee extends Person {
    public $role;
    public $desk;
    public $rating;
    public $availableLeaves;
    public $annualSalary;

    public function __construct($_name, $_surname, $_dateOfBirth, $_gender, $_role, $_desk = 0, $_rating = 0, $_availableLeaves = 0, $_annualSalary){
        parent::__construct($_name, $_surname, $_dateOfBirth, $_gender);
        $this->role = $_role;
        $this->desk = $_desk;
        $this->annualSalary = number_format($_annualSalary, 2);
    }

    public function reviewSalary($amount){
        try {
            if (! is_int($amount)){
                throw new Exception("Invalid amount, please insert a numeric value");
            }
            $this->annualSalary += number_format($amount, 2);
            echo "The salary has been reviewed of $amount";
        } catch (Exception $e) {
            echo $e->getMessage();
        }  
    }

    public function applyLeaves($leavesRequest){
        $this->availableLeaves -= $leavesRequest;
        echo "<small>Available leaves for {$this->name} {$this->surname} are: {$this->availableLeaves}</small>";
    }
}