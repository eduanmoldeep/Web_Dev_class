<?php

$flag = 1; //sab theek hai till now
$errors = array("Error aayega");
////echo "hua shuru <br>";
if (isset($_POST['submit'])) {

    //submit hua hai
    //echo "submit mila <br>";

    if (isset($_POST['firstname'])) {
        // firstname mila
        //echo "firstname mila <br>";
        if (empty($_POST['firstname'])) {
            // firstname khaali hai
            //echo "firstname khaali hai <br>";
            $flag = 0;
            array_push($errors, "Firstname is empty");
        }
    } else {
        // firstname nahi mila
        array_push($errors, "Firstname not found");
    }

    if (isset($_POST['lastname'])) {
        // lastname mila
        //echo "lastname mila <br>";
        if (empty($_POST['lastname'])) {
            // lastname khaali hai
            $flag = 0;

            array_push($errors, "Lastname is empty");
            //echo "lastname de <br>";
        }
    } else {
        // Lastname nahi mila
        //echo "lastname nahi mila <br>";
        array_push($errors, "Lastname not found");
    }

    if (!$flag) {
        // Eror hai 
        echo "Errors Found re baba<br>";
        // print_r($errors);
        foreach($errors as $error){
            echo $error."<br>";
        }
        // echo array_pop($errors);

        //echo "<br>";
        //echo "Chalta hai code";
    }


    if ($flag) {
        echo "Sab Barabar hai bantai !<br>";
    }
} else {
    //echo "Submit nahi mila";
    echo "bhag hacker :P<br>";
    
}


// if (!$flag) {
//     // Eror hai 
//     echo "Errors Found re baba<br>";
//     // print_r($errors);
//     foreach($errors as $error){
//         echo $error."<br>";
//     }
//     // echo array_pop($errors);

//     //echo "<br>";
//     //echo "Chalta hai code";
// }else{
//     echo "Sab Barabar hai bantai !<br>";
// }