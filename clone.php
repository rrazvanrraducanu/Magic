<?php
class Student{
    function __clone(){
        echo "URA!!!";
    }
}
$student=new Student;
$student2=clone $student;

