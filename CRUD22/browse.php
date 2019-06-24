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


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student_info";

    $conn = mysqli_connect($servername,$username,$password,$database);

    $sql = "SELECT * FROM students";
    $result  = mysqli_query($conn,$sql);

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
            <h1>Student Info Home <span class="text-primary">|| Available Student</span></h1>
            <a href="index.php" class="btn btn-primary">Add New Students</a>
        </div>
    </div>
    <div class="container">
    <?php
        if(isset($_GET['msg'])){
            if($_GET['msg'] === "success"){ ?>
            <div class="alert alert-danger" role="alert">
                <strong>Student Info Deleted</strong>
            </div>
        <?php  } else if($_GET['msg'] === "error"){ ?>
            <div class="alert alert-danger" role="alert">
                <strong>Something Went Wrong : <?= mysqli_error($conn) ?></strong>
            </div>
        <?php    }
        }
    ?>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>Roll No</th>
                    <th>Student Name</th>
                    <th>Student Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['std_name'] ?></td>
                        <td><?= $row['std_email'] ?></td>
                        <td>
                            <a href="view.php?std_id=<?= $row['id'] ?>" class="btn btn-success">View</a>
                            <a href="edit.php?std_id=<?= $row['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete.php?std_id=<?= $row['id'] ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php  }
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>