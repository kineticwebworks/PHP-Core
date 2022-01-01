`<title>Array Basic & Associative</title>

<?php 
    # In php an array can be of two type :-

    # 1. Basic array :- 
    //It is used to store similar type of data in most of the lamguages 
    //but in php we can store multiple type of data in one array ( ie. Int, Float or String(char) ).
    //Basic arrays gets the conventional type of indexing system as key value starting from "0 to n" .

    $data=array(10,20,30,40,50,60);

    # echo $data; // we can not echo an array liek normal variable.
    // As it will show parse error : syntax error( cannot covert array to string ).
    # Hence we use print_r() function;
    echo "<pre>";
    print_r($data);
    echo "</pre>"; //using <pre> tag to format the data.

echo "<hr>";
    # To print any a data specific to a perticular location in array we use echo [Index no.].
    echo $data[2];

echo "<hr>";
    # We can perform maths function inbetween the values stored in an array as well :-
    echo $data[1] + $data[2];

echo "<hr>";
    # To print 2 specific values of an array we can either use ,/. to joint the 2 values at two diffren index spaces :-
    echo $data[4] . $data[3] . "/";
    echo $data[4] , $data[3];

echo "<hr>";
    # Reassigning new value to any index value is also possible here by the following way :-
    $data[1] = 100;
    $data[3] = 400;
    $data[4] = 900;

    echo $data[1] . " / ". $data[3] ." / ". $data[4];
echo "<hr>";

    #2. Associative array :- 
    //It is similar to basic php array but instead of having indexed system for key value
    //it has string in the place of the index number (ie array["Amit"=> 981897562] ) .
    //In this type of array one can store the data more secure way with more accurate and readable syntax.

    # The shorthand way arr["example1=> "Vaibhav"].
    $arr = [10,20,"Vaib",50,"Length"];
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

echo "<br>";

    # Associative array example.
    $asso = ["Data1"=>100, "Data2"=>200, "Data3"=>"Example"];
    echo "<pre>";
    print_r($asso);
    echo "</pre>";

    echo $asso["Data3"];

    // we can put a non string key or data without listing a string inside an associative array 
    //and the data will be assigned the regular key value staring 0 to n.
    $asso = ["Data1"=>100, 20, "Data2"=>200, "Delhi", "Data3"=>"Example"];
    echo "<pre>";
    print_r($asso);
    echo "</pre>";
echo "<hr>";
    # Diffrence between Associative arrrya and basic array
    //    Basic           |           Associative
    // When order is      |   When Having a refrence label
    // most important.     |   is more important.  

    #Multi Dimensional Array :-
    //Multi-dimensional arrays are such type of arrays which stores an another array at each index instead 
    //of single element. In other words, define multi-dimensional arrays as array of arrays. As the name 
    //suggests, every element in this array can be an array and they can also hold other sub-arrays within. 
    //Arrays or sub-arrays in multidimensional arrays can be accessed using multiple dimensions.

    $multi = [10,array(10,20,array("vaibhav","Delhi"))];
    echo "<pre>";
    print_r($multi);
    echo "</pre>";

echo "<hr>";

    # Excercise :-

    $big_Data = ["India"=> array("Capital"=>"Delhi","zipcode"=>"110095"),"Thailand"=>array("Capital"=>"Bangkok","zipcode"=>"76868"),"Bangladesh"=>array("Capital"=>"Dhaka","zipcode"=>"82884"),"Norway"=>array("Capital"=>"Oslo","zipcode"=>"52672")];
    echo "<pre>";
    print_r($big_Data);
    echo "</pre>";

?>