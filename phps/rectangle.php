<html>
    <body>
        <?php
        class Rectangle {
            public $length =20;
            public $width = 10;

            public function area() {
                $L = $this->length;
                $W = $this->width;
                echo "Area of the rectangle is " . ($L * $W);
            }
        }
        $rectangle = new Rectangle();
        $rectangle->area();
        ?>
    </body>
</html>
