<?php 
    interface Resizable{
        function setSize($s);
        function beforeChaning();
        function afterchanging();
    }

    class Square implements Resizable{
        function __construct($s){
            $this->size = $s;
        }

        function setSize($s){
            $this->size = $s;
        }

        function beforeChaning(){
            echo "Value before changing : ". $this->size ."<br/>";
            echo "Area of square is ". $this->size*$this->size ."<br/>";
        }
        function afterchanging(){
            echo "Value after changing : ". $this->size ."<br/>";
            echo "Area of square is ". $this->size*$this->size ."<br/>";
        }
    }
    $Square = new Square(5);
    $Square->beforeChaning();
    $Square->setSize(10);
    $Square->afterchanging();

?>