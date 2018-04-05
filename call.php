<?php
class Student{
    public $nume;
    private $prenume;
    public function nume($val){
        $this->nume=$val;
    }
    protected function prenume($val){
        $this->prenume=$val;
    }
    function __call($name,$param){
echo "Incercati sa apelati metoda ".$name." cu argumentul ".print_r($param). "<br/>"; 
    }
}
$student=new Student;
$student->nume("Popescu");
echo $student->nume."<br/>";
$student->prenume('Popescu');
$student->adresa('bla','bla','bla');


