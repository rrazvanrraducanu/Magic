<?php
class Student{
    function __invoke(){
        echo "BIG MISTAKE!!!";
    }
    //__invoke() este apelata cand se invoca un obiect ca o functie
}
$student=new Student;
$student();
