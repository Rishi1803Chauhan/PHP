<?php
    class Student{
        function __construct($n,$a,$g){
            $this->name = $n;
            $this->age = $a;
            $this->grade = $g;
        }
        function getStudent(){
            echo "Data collected --- <br/>";

        }
        function setStudent(){
            echo "Student name : ".$this->name. "<br/>";
            echo "Student age : ".$this->age. "<br/>";
            echo "Student grade : ".$this->grade. "<br/>";
        }
    }
    $students = new Student("Rishi",18,"B");
    $students->getStudent();
    $students->setStudent();

?>