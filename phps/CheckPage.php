<html>
<body>
	<?php

	function primeCheck($number){
    if ($number == 1)
    return 0;
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 0;
    	}
    return 1;
	}

	echo "<h1> Arithamatic </h1>";
	$a = 4;
	$b = 10;
	$c = $a+$b;
	echo $c."<br>";
	$c = $a-$b;
	echo $c."<br>";
	$c = $a*$b;
	echo $c."<br>";
	$c = $a/$b;
	echo $c."<br>";
	$c = $a%$b;
	echo $c."<br>";
	$c = $a**$b;
	echo $c."<br>";

	echo "<h1> Factorial of a number </h1>";
	$answer = 1;
	for ($i = 1; $i <= 5; $i++) {
    $answer *= $i;
    echo $answer."<br>";
	}
	echo "Factorial of 5 is: " . $answer . "<br>";

	echo "<h1> Fabonacii</h1>";
	$fabonacii = 8;
	$sum = 0;
	$i = 1;
	$j = 0;
	for($i;$i<$fabonacii;$i++){
		$sum += $j;
		$j = $i;
	}
	echo $sum;

	echo "<h1>Table of 8</h1>";

	for($i =1;$i<=10;$i++){
		$ans = $i * $fabonacii;
		echo $ans."<br>";
	}

	echo "<h1>Prime and odd or even</h1>";
	$num = 10;

	$flag = primeCheck($num);
	if ($flag == 1)
    echo $num." Prime and ";
	else
    echo $num." Not Prime and ";
	
	if($num%2==0){
		echo "even";
	}
	else{
		echo "odd";
	}
	
	$height = 15;
	$breadth = 10;
	echo "<h1>area of triangle ,square and rectangle</h1>";
	echo "Area of triangle is - ".($height*$breadth)/2 ."<br>";
	echo "Area of square is - ".($height**$height) ."<br>";
	echo "Area of rectangle is - ".($height*$breadth) ."<br>";

	?>
	</body>
</html>