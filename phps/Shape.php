<html>
    <body>
        <?php
           class Shape{
            protected $length;
            protected $width;

            function __construct($length, $width) {
                $this->l = $length;
                $this->w = $width;
    }
             abstract function CalculateArea(){
                
            }
           }
           class Triangle extends Shape{
            function CalculateArea(){
                $l = $this->l;
                $b = $this->w;
                echo "Area of Triangle : ".($l*$b)/2 ."<br/>";
            }
           }
           class Rectangle extends Shape{
            function CalculateArea(){
                $l = $this->l;
                $b = $this->w;
                echo "Area of Rectangle : ". $l*$b ."<br/>";
            }
           }

           $Rectangle = new Rectangle(20,10);
           $Triangle = new Triangle(20,10);

           $Rectangle->CalculateArea();
           $Triangle->CalculateArea();

        ?>
    </body>
</html>