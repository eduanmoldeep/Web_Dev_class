<?php

$result;
$conn;

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

    $conn = mysqli_connect($servername,$username,$password,$database);

    $sql = "INSERT INTO students (std_name,std_email,std_phone,std_gender,std_address) VALUES('$std_name','$std_email','$std_phone','$std_gender','$std_address')";
    $result = mysqli_query($conn,$sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Info Home</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body><br>
    <div class="container">
        <div class="jumbotron">
            <h1>Student Info Home <span class="text-primary">|| Add New Student</h1>
            <a href="browse.php" class="btn btn-primary">Browse Students</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

            <?php 
                if (isset($result) && $result === TRUE) { ?>
                   <div class="alert alert-success" role="alert">
                       <strong>Student Info Inserted Successfully</strong>
                   </div> 
            <?php    } else if(isset($result) && $result === FALSE){ ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Something Went Wrong <?= mysqli_error($conn) ?></strong>
                    </div>
            <?php }
            ?>
                <form action="index.php" method="post">
                    <div class="form-group">
                        <label for="std_name">Student Name</label>
                        <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Enter Student Name">
                    </div>
                    <div class="form-group">
                        <label for="std_email">Student Email</label>
                        <input type="email" name="std_email" id="std_email" class="form-control" placeholder="Enter Student Email Address">
                    </div>
                    <div class="form-group">
                        <label for="std_phone">Student Phone</label>
                        <input type="number" name="std_phone" id="std_phone" class="form-control" placeholder="Enter Student Phone No">
                    </div>
                    <div class="form-group">
                        <label for="std_gender">Select Gender</label>
                        <select name="std_gender" id="std_gender" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="std_address">Student Address</label>
                        <textarea name="std_address" id="std_address" rows="5" class="form-control" placeholder="Enter Student Address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Save Student Info</button>
                </form>
                <br>
            </div>
        </div>
    </div>    
</body>
</html>