 <html>
<body>
	<?php
	function Palindrome($number){  
		$temp = $number;  
		$new = 0;  
		while (floor($temp)) {  
			$d = $temp % 10;  
			$new = $new * 10 + $d;  
			$temp = $temp/10;  
		}  
		if ($new == $number){  
			return 1;  
		}
		else{
			return 0;
		}
	}  

	function EvenOdd($num){
		if($num%2==0){
			return("Even");
		}
		else{
			return("Odd");
		}
	} 
	 // Palindrome Code
	 echo "<h1>Palindrome Check </h1>";
	$original = 1441; 
	if (Palindrome($original)){  
		echo "Palindrome<br/>";  
	} 
	else {  
	echo "Not a Palindrome<br/>";  
	}
	
	// Even or Odd
	echo "<h1>Even or Odd </h1>";
	$a = 9;
	$b = 10;
	echo "9 is  ".EvenOdd($a)."<br/>";
	echo "10 is  ".EvenOdd($b)."<br/>";

	echo "<h1> Changing Array Values to Lower/Upper Case </h1>";

	$string1 = array("H","e","L","L","o");
	for($c = 0; $c < count($string1); $c++){
		echo $string1[$c]." - ";
		if(ctype_upper($string1[$c])){
			$string1[$c] =  strtolower($string1[$c]);
			echo $string1[$c]."<br/>";
		}
		elseif(ctype_lower($string1[$c])){
			$string1[$c] =  strtoupper($string1[$c]);
			echo $string1[$c]."<br/>";
		}
	}

	echo "<h1> Numbers divisible by 4 </h1>";
	for($d = 200; $d <= 250; $d++){
		if($d%4==0){
			echo $d." is Divisible by 4<br/>";
		}
	}

	
	?>
</body>
</html>