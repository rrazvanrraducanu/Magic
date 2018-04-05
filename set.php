<?php
class Student{
    public $nume;
    private $prenume;
function __set($name,$param){
        echo "Incercati sa setati valoarea proprietatii ".$name." cu valoarea ".$param; 
        //setam proprietatea $name cu valoarea $param
        $this->{$name}=$param;
    }
    function display(){
      echo "<br/>Proprietatea private prenume are valoarea: ".$this->prenume;
    }
}
$student=new Student;
echo $student->nume="Popescu<br/>";
$student->prenume="Bogdan";
$student->display();
