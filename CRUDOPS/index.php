<?php


$result = FALSE;

if(isset($_POST['submit'])){
    $std_name = $_POST['std_name'];
    $std_email = $_POST['std_email'];    
    $std_phone = $_POST['std_phone'];
    $std_gender = $_POST['std_gender'];
    $std_address = $_POST['std_address'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student_info";

   
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO students(Name, Email, Phone, Gender, Address) VALUES('$std_name','$std_email','$std_phone','$std_gender','$std_address')";

    $result = mysqli_query($conn,$sql);



}
    







?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Info Home Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <br>
    <div class="container">
        <div class="jumbotron">
            <h1>Student Info Home</h1>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4 col-4-lg">

            </div>
            <div class="col-4 col-4-lg">
                <form action="index.php" method="post">
                <?php

                if($result){

                ?>

                <div class="alert alert-success" role="alert">
                    <strong>Inserted Data Success</strong>
                </div>
                <?php
                
                    } else{

                ?>


                <div class="alert alert-danger" role="alert">
                    <strong>Something Went Wrong</strong>
                </div>

                <?php 
                
                    }
                
                ?>
                    <div class="form-group">
                        <label for="std_name">Student Name</label>
                        <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Enter Student Name">
                    </div>

                    <div class="form-group">
                        <label for="std_email">Student Email</label>
                        <input type="text" name="std_email" id="std_email" class="form-control" placeholder="Enter Student Email">
                    </div>

                    <div class="form-group">
                        <label for="std_phone">Student Phone Number</label>
                        <input type="number" name="std_phone" id="std_phone" class="form-control" placeholder="Enter Student Phone Number">
                    </div>

                    <div class="form-group">
                        <label for="std_gender">Select Gender</label>
                        <select id="std_gender" class="form-control" name="std_gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="std_address">Student Address</label>
                        <textarea name="std_address" id="std_address" rows="5" class="form-control" placeholder="Enter Your Address"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                    <br>
                </form>
            </div>
            <div class="col-4 col-4-lg">

            </div>
        </div>
    </div>
</body>
</html>