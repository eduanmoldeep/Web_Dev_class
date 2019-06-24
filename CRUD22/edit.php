<?php

session_start();
if(isset($_SESSION['login'])){
    if(!$_SESSION['login']){
        $_SESSION['error'] = "You Need To Login First";
        header('Location:login.php');
    }
}else{
    $_SESSION['error'] = "You Need To Login First";
    header('Location:login.php');
}

$result;
$id;

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_info";

$conn = mysqli_connect($servername,$username,$password,$database);

if(isset($_GET['std_id'])){
    $id = $_GET['std_id'];

    $sql = "SELECT * FROM students WHERE id = $id";
    $result  = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }else{
        header('Location:index.php');    
    }
}

if(isset($_POST['submit'])){
    $std_name = $_POST['std_name'];
    $std_email = $_POST['std_email'];
    $std_phone = $_POST['std_phone'];
    $std_gender = $_POST['std_gender'];
    $std_address = $_POST['std_address'];

    $sql = "UPDATE students SET std_name = '$std_name', std_email='$std_email', std_phone='$std_phone', std_gender='$std_gender', std_address='$std_address' WHERE id=$id";
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
            <h1>Student Info Home <span class="text-primary">|| Update Student</h1>
            <a href="index.php" class="btn btn-primary">Add New Student</a>
            <a href="browse.php" class="btn btn-warning">Browse Students</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

            <?php 
                if (isset($result) && $result === TRUE) { ?>
                   <div class="alert alert-success" role="alert">
                       <strong>Student Info Updated Successfully</strong>
                   </div> 
            <?php    } else if(isset($result) && $result === FALSE){ ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Something Went Wrong <?= mysqli_error($conn) ?></strong>
                    </div>
            <?php }
            ?>
                <form action="edit.php?std_id=<?= $row['id'] ?>" method="post">
                    <div class="form-group">
                        <label for="std_name">Student Name</label>
                        <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Enter Student Name" value="<?= $row['std_name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="std_email">Student Email</label>
                        <input type="email" name="std_email" id="std_email" class="form-control" placeholder="Enter Student Email Address" value="<?= $row['std_email'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="std_phone">Student Phone</label>
                        <input type="number" name="std_phone" id="std_phone" class="form-control" placeholder="Enter Student Phone No" value="<?= $row['std_phone'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="std_gender">Select Gender</label>
                        <select name="std_gender" id="std_gender" class="form-control">
                            <option value="male" <?= $row['std_gender'] === "male" ? "selected" : "" ?>>Male</option>
                            <option value="female" <?= $row['std_gender'] === "female" ? "selected" : "" ?>>Female</option>
                            <option value="other" <?= $row['std_gender'] === "other" ? "selected" : "" ?>>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="std_address">Student Address</label>
                        <textarea name="std_address" id="std_address" rows="5" class="form-control" placeholder="Enter Student Address"><?= $row['std_address'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Update Student Info</button>
                </form>
                <br>
            </div>
        </div>
    </div>    
</body>
</html>