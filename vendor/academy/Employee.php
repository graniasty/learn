<?php

/**
 * Description of Employee
 *
 * @author darek
 * 
 */

namespace academy;
//require_once 'AbstractPerson.php';

class Employee extends AbstractPerson {

    private $salary;
    private $commission;

    public function __construct($name, $surname, $age, $salary, $gender = self::GENDER_MALE) {
        parent::__construct($name, $surname, $age, $gender);
        $this->salary = $salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
        return $this;
    }

    public function getSalaryYear() {
        return $this->salary * 12;
    }

}
