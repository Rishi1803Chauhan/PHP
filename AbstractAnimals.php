<?php
    abstract class Animals{
        abstract function makeSounds();

        abstract function eats();
    }
    class Dog extends Animals{
        function makesounds(){
            echo "Barks<br/>";
        }
        function eats(){
            echo "likes bones <br/>";
        }
    }
    class Cat extends Animals{
        function makesounds(){
            echo "Meowwwwwwwwwwwww<br/>";
        } 
        function eats(){
            echo "likes fish <br/>";
        }
    }
    class Bird extends Animals{
        function makesounds(){
            echo "Chirp <br/>";
        }
        function eats(){
            echo "seeds ans insects <br/>";
        }
    }
    $Dogs = new Dog();
    $Dogs->makesounds();
    $Dogs->eats();

    $Cats = new Cat();
    $Cats->makesounds();
    $Cats->eats();

    $birds = new Bird();
    $birds->makesounds();
    $birds->eats();
?>