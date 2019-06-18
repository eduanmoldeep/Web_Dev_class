<?php

$flag = 1;
$errors = array();

if (isset($_POST['submit'])) {
    
    if (isset($_POST['firstname'])) {
        if (empty($_POST['firstname'])) {
            
            array_push($errors, "Firstname is Empty");
        } else {
            // sab theek hai
        }
    } else {

        $flag = 0;
        array_push($errors, "Firstname not Found");
    }

    if (isset($_POST['lastname'])) {
        if (empty($_POST['lastname'])) {
            $flag = 0;
            array_push($errors, "Lastname is Empty");
        } else {
            // sab theek hai

        }
    } else {

        $flag = 0;
        array_push($errors, "Lastname not Found");
    }
} else {
    // echo "Use the form !!!!";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPform</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>Simple Login Form</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="index.php" method="post">
                    <?php
                    // lets show resuts

                    if(isset($_POST['submit'])){

                    
                    if (!$flag) {
                        // inputs theek hai

                        ?>
                        

                    <?php } else { ?>
                        <div class="alert alert-success">
                            <strong>Success!</strong> Information submission successfull
                        </div>
                        <div class="alert alert-danger">
                            <strong>Errors!</strong> Following Errors occured:
                            <ul>
                                <?php
                                foreach($errors as $error){
                                    echo "<li>".$error."</li>";
                                }
                                ?>
                            </ul>
                        </div>


                    <?php 
                    } 
                    }?>

                    <div class="form-group">
                        <label for="firstname">Enter Firstname</label>
                        <input class="form-control" type="text" name="firstname" id="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Enter Lastname</label>
                        <input class="form-control" type="text" name="lastname" id="lastname">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

</body>

</html>