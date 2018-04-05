<?php
class Student{
    function __construct(){
        echo "URA :)<br/>";
    }
    function __destruct(){
        echo "Vai! Vai! Vai!";
    }
}
$student=new Student();

