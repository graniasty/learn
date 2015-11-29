<?php

//ten kod włącza wyświetlanie błędów, jeśli nie jest włączone
error_reporting(E_ALL);
ini_set('display_errors', 1);
//poniższe wyłączamy, bo zastosujemy autoloadera
//require_once 'vendor/Employee.php';

spl_autoload_register('AutoLoader');

function AutoLoader($className){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once 'vendor/'.$class.'.php';
}

use academy\Employee;


$john = new Employee("John", "Smith", 22, 3999);

$jane = new Employee("Jane", "Kowalski", 28, 2999, Employee::GENDER_FEMALE);
echo $john->hello();

echo "to jest index";

echo '</br>';

$john
     ->setSalary(1000)
     ->setName('Mike');
     
     echo $john->hello();


