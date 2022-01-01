<?php
    

    # Allowed Scenarios
    // $data = 100;
    // echo $data;
    // echo "<br>";

    // $DATA = 100;
    // echo $DATA;
    // echo "<br>";
    // Both Of the Data Variables are diffrent 1 being in Lowercase and one being in Uppercase 
    // and will return diffrent value.

    // $data = 300;
    // echo $data;
    // echo "<br>";
    // A variable can be override by reassigning a new value to the variable.

    # camelCase

    // $myData = 500;
    // echo $myData;
    // echo "<br>";
    // A camel case name convention is a way of naming your variable, in which we keep the 
    // 1st ketter of the variable as lowercase and that the next letter starts with a uppercase just like you see above.

    #Other Name Convention

    // $my_data = 300;
    // echo $my_data;
    // echo "<br>";
    // Using Underscore between two words.

    // $_mydata = 300;
    // echo $_mydata;
    // echo "<br>";
    // Using Underscore before the 1st word.

    # Exception's And Wrong Name Convention

    // 1. $my-data = 100;
    // echo $my-data;
    // echo "<br>";

    // 2. $1mydata = 100;
    // echo $1mydata;
    // echo "<br>";

    // 3. $@mydata = 100;
    // echo $@mydata;
    // echo "<br>";

    // 4. 
    // $__mydata = 100;
    // echo $__mydata;
    // echo "<br>";
    //  Adding two Underscore Also Works but is not prfered as it takes extra space in the memory

    #Super Gloabla Variables.

    // $_GET;
    // $_POST;
    // $_REQUEST;
    // $_SERVER;
    // $_SESSION;
    // $_COOKIE;
    // $_FILES;
    $title = array('$GLOBALS ','$_SERVER', '$_REQUEST','$_POST','$_GET');
    $defination = array('It is a superglobal variable which is used to access global variables from anywhere in the PHP script. PHP stores all the global variables in array $GLOBALS[] where index holds the global variable name, which can be accessed.','It is a PHP super global variable that stores the information about headers, paths and script locations. Some of these elements are used to get the information from the superglobal variable $_SERVER.','It is a superglobal variable which is used to collect the data after submitting a HTML form. $_REQUEST is not used mostly, because $_POST and $_GET perform the same task and are widely used.', 'It is a super global variable used to collect data from the HTML form after submitting it. When form uses method post to transfer data, the data is not visible in the query string, because of which security levels are maintained in this method.','$_GET is a super global variable used to collect data from the HTML form after submitting it. When form uses method get to transfer data, the data is visible in the query string, therefore the values are not hidden. $_GET super global array variable stores the values that come in the URL.');

    for($x=0;$x<count($title);$x++){
        echo $title[$x];
        echo "<br>";
        echo $defination[$x];
        echo "<br>";
        echo "<br>";
    }

?>