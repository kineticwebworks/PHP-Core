<?php 
// Basic Function
    function sayHello(){
        echo "Hello World !!";
    }

    sayHello();

    echo "<hr>";


// Function With Arguments

    function myName($name){
        echo "My name is $name";
    }

    myName("vaibhav"); //If there is no parameter it will show Fatal error: Uncaught ArgumentCountError: 
                       //Too few arguments to function myName().


// Adding parameter when not required or decalred in function
    function sayYo(){
        echo "Hello World !!";
    }

    sayYo("Vaibhav");

    echo "<hr>";

// Multiple Arguments

    function add($n1, $n2){
        $res = $n1 + $n2;
        echo $res;
    }
    add(10,20);

    echo "<hr>";

    function heading($username, $tag){
    echo "<H$tag> Vaibhav </H$tag>";
    }
    heading("Vaibhav Singh", 2);
    
    echo "<hr>";

    function redirect($url, $name){
        echo "<a href=$url>$name</a>";
    }
    redirect("https://www.google.com/", "Google Search");

    echo "<hr>";

    function shopRate($price, $tax = 40){
        $TP = $price + $tax;
        echo $TP;
    }

    shopRate(500, );
    echo "<br>";
    shopRate(1000, 80);

    echo "<hr>";
    echo "<hr>";

    # Return Single Value
    function addIt($n1, $n2){
        $res = $n1 + $n2;
        return $res;
    }

    $result = addIt(100, 500);
    echo $result
?>

<hr>

<?php 
    # Return Multiple Value
        function addAdv($x,$y){

            $res = $x + $y;
            $res1 = $x - $y;
            $res2 = $x * $y;
            $res3 = $x / $y;
            return array($res,$res1,$res2,$res3);
        }
        $res = addAdv(10,20);

        foreach($res as $value) {
            print $value . "<br>";
          }



?>