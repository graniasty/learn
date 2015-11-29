<?php

/**
 * Description of AbstractPerson
 *
 * @author darek
 */
namespace academy;

abstract class AbstractPerson {

    const GENDER_MALE = 'M';
    const GENDER_FEMALE = 'F';

    private $name;
    private $surname;
    private $age;
    private $gender;

    public function __construct($name, $surname, $age, $gender = self::GENDER_MALE) {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setSurname($surname) {
        $this->surname = $surname;
        return $this;
    }

    public function getSurname() {
        return $this->surname;
    }
    
    public function setAge($age){
        $this->age = $age;
        return $this;
    }
    
    public function getAge(){
        return $this->age;
    }

    public function hello() {
        //return $this->name." ".$this->surname;
        return sprintf("%s,%s", $this->name, $this->surname);
    }

    //sygnatura metody
    abstract public function getSalaryYear();
}
