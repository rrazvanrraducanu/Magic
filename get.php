<?php
class Student{
    public $nume;
    protected $prenume;
    function __get($param){
        echo "Property <font color='red'>".$param."</font> does not exist!<br/>"; 
    }
}
$student=new Student;
echo $student->nume="Popescu<br/>";
$student->prenume;
$student->adresa;
