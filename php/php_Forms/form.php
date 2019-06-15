
    <?php

$flag = 1; //sab theek hai till now
// $errors = array("Error aayega");
$errors = array();
////echo "hua shuru <br>";
if (isset($_POST['submit'])) {

    //submit hua hai
    //echo "submit mila <br>";
    $firstname = "";
    $lastname = "";

    if (isset($_POST['firstname'])) {
        // firstname mila
        //echo "firstname mila <br>";
        
        if (empty($_POST['firstname'])) {
            // firstname khaali hai
            //echo "firstname khaali hai <br>";
            $flag = 0;
            array_push($errors, "Firstname is empty");
        }else{
            $firstname = $_POST['firstname'];
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
        }else{
            $lastname = $_POST['lastname'];
        }
    } else {
        // Lastname nahi mila
        //echo "lastname nahi mila <br>";
        array_push($errors, "Lastname not found");
    }

   
} else {
    //echo "Submit nahi mila";
    // echo "bhag hacker :P<br>";
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

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1>PHP Forms</h1>
        </div>
        <?php

if (!$flag) {
    // Eror hai 
    echo "Errors Found re baba<br>";
    // print_r($errors);
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    // echo array_pop($errors);

    //echo "<br>";
    //echo "Chalta hai code";
}


if ($flag) {
    echo "Sab Barabar hai bantai !<br>";
}
        ?>
        <form action="form.php" method="post">
            <input type="text" name="firstname" value="<?= isset($firstname) ? $firstname : "" ?>" id="firstname" placeholder="Enter your Firstname">
            <input type="text" name="lastname" value="<?= isset($lastname) ? $lastname : "" ?>"id="lastname" placeholder="Enter your Lastname">
            <button type="submit" name="submit">Submit Form</button>
        </form>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>

</html>