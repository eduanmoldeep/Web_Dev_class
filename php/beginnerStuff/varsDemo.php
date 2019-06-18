<?php

$a = 3; //Global Variable
$b = 4; //Global Variable
function myTest(){
    $a; //Local Variable
    $a = 2;

    global $b; // Global To Local

    echo "Local = ". $a;
    echo "<br/>Global in Local = ". $GLOBALS['a'];

    echo "<br/>Global to Local = ". $GLOBALS['b'];

}

myTest();

echo "<br/>Global = ". $a;

?>