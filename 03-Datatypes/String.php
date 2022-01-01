<title>Strings</title>

<?php 
# Case Php Myth ( How php sees a statment )

echo 10 +"2 cat"; 
echo '<hr>';
//The output will be 12, Cause Php Sees !st data type as an Integer 
//hence it will look for an integer in nent step after seeing the addition operator
//And will return 12 giving a warning.
?>
 
<!-- Template Literals cannot be used in php like they can be in Javascript (``)--> 

<?php 
# 2 ways to make a string
//1. Single Quotes ('')
//2. Double Quotes ("")

echo '<br>Hello World';
echo "<br>Hello World"; 
//Double quotes can hold the value/data of a variable 
//ulike signle quotes which assigns pure string type

echo '<hr>';
# case 1 Assigning a string data to a variable.

$firstName = "Kinetic";
$lastName = "Orb";

    echo "<br>" . $firstName;
    echo $lastName;

echo '<hr>';

# Concatination of two string ( using ".")
//1. Using (.) without double quotes.
    echo $firstName ." ". $lastName;
echo '<hr>';
//2. Using diuble quotes.
    echo "$firstName $lastName";
echo '<hr>';
//3. Using Single Quotes will not carry the value of variable and will make it a string.
    echo '$firstName $lastName';
echo '<hr>';
//4 Echoing a string with a variable without adding space between the variable string data and the manually typed string.
    echo "My Name Is {$firstName}";
echo '<hr>';

# Overiding A string (A string can be reassigned with a new value)
    $firstName = "Vaibhav";
    echo $firstName;
echo '<hr>';

# Concatinating a new value to the old string using (.=).
    $firstName = "kinetic";
    $newName="Orb";
    $firstName.=$newName;
    echo $firstName;
echo '<hr>';


# String Function

    //1. strtolower() - Convert the whole string to Lower Case.
    echo strtolower($firstName);
echo '<hr>';
    //2. strtoupper() - Convert the whole string to Lower Case.
    echo strtoupper($firstName);
echo '<hr>';
    //3. ucfirst() - Convert the first letter of the string to Upper Case.
    echo ucfirst($firstName);
echo '<hr>';
    //4. ucwords() - Convert the first letter of every word in the string to Upper Case.
    $var1 = "This is a demo string";
    echo ucfirst($firstName);
echo '<hr>';
    //5. strlen() - Returns a Integer Value that tell how many char. are there in a string.
    echo ucwords($var1);
echo '<hr>';
     //6. str_repeat() - Returns a Integer Value that tell how many char. are there in a string.
     echo str_repeat($var1,10);
echo '<hr>';
?>
 

