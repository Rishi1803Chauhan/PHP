<html>
    <body>
    <?php 
    echo "<h1> Association ARRAY </h1><br/>";
    $departments = array("CSE"=>"120","IT"=>"60","Plastic"=>"40","chemical"=>"40","EXTC"=>"60");
    print_r($departments);
    echo "<br/>";

    echo "<h1> Sort Array </h1><br/>";
    $nameandrollno = array("Bhumika"=>"06","Manohar"=>"07","RISHI"=>"08","Honey"=>"09","Deep"=>"10");
    foreach($nameandrollno as $k => $v){
        echo "Name :".$k." Roll No. :".$v."<br/>";
    }
    echo "<h1> Array Mergeing </h1><br/>";
    $Array1 = array(77,87,array(23,75));
    $Array2 = array("str1","str2");
    $Array3 = array_merge($Array1,$Array2);
    print_r($Array1);
    echo "<br/>";
    print_r($Array2);
    echo "<br/>";
    print_r($Array3);
    echo "<br/>";
    
    echo "<h1> Array key case </h1><br/>";
    print_r(array_change_key_case($nameandrollno,CASE_UPPER));
    
    echo "<h1> Array Column </h1><br/>";
    
    $mastarray = array(
        array(
            'id'=> 453,
            'name' => "IT'z me",
            'last_name' => "Not me",
        ),
        array(
            'id'=> 42,
            'name' => "He is me",
            'last_name' => "he is not me",
        ),
        array(
            'id'=> 643,
            'name' => "they are me",
            'last_name' => "htey are not me",
            )
        );
        $last_namearray = array_column($mastarray,'name');
        print_r($last_namearray);
        echo "<br/>";
        
        echo "<h1> Array combine </h1><br/>";
        $name = array("Rishi","Manohar","Honey","Deep","Arumugavel");
        
        $age = array("07","08","09","10","10");
        print_r($name);
        echo "<br/>";
        print_r($age);
        echo "<br/>";
        print_r(array_combine($name,$age));
        echo "<br/>";
        
        echo "<h1> Array Count_Values</h1><br/>";
        print_r( array_count_values($name));
        echo "<br/>";
        
        echo "<h1> Array diff</h1><br/>";
        $nameandrollno1 = array("Bhumika"=>"06","Manohar"=>"07","RISHI"=>"08","Honey"=>"09","Deep"=>"10","Arumugavel"=>"01");
        print_r($nameandrollno);
        echo "<br>";
        print_r($nameandrollno1);
        echo "<br>";
        $arayyyy = array_diff($nameandrollno1,$nameandrollno);
        print_r($arayyyy);

        echo "<h1> Array fill </h1><br/>";
        print_r($name);
        echo "<br/";
        $name = array_fill(4,1,"Punit");
        print_r($name);
        echo "<br/";

        echo "<h1> Array pop </h1><br/>";
        echo "Poped element - ".array_pop($name);
        echo "<br/";

        echo "<h1> Array Push </h1><br/>";
        echo array_push($name,"Vena","Krisha");
        echo "<br/> Pushed element - ";
        print_r($name);
        echo "<br/>";

        echo "<h1> Array rand </h1><br/>";
        $random_keys=array_rand($nameandrollno,3);
        print_r($random_keys);

        echo "<h1> Array recverse </h1><br/>";
        print_r(array_reverse($nameandrollno));

        echo "<h1> Array  slice </h1><br/>";
        print_r(array_slice($nameandrollno1,2));

        echo "<h1> Array sum </h1><br/>";
        echo array_sum($age)." <br/>";

        echo "<h1> Array Unique </h1><br/>";
        $mastlog = array("Rishi","Manohar","Honey","Deep","Arumugavel","Deep");
        print_r(array_unique($mastlog));
        ?>
    </body>
</html>