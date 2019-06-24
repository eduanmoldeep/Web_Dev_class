<?php

session_start();
if (isset($_SESSION['login'])) {
    if (!$_SESSION['login']) {
        $_SESSION['error'] = "You Need To Login First";
        header('Location:login.php');
    }
} else {
    $_SESSION['error'] = "You Need To Login First";
    header('Location:login.php');
}



if (isset($_GET['std_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "student_info";

    $conn = mysqli_connect($servername, $username, $password, $database);

    $id = $_GET['std_id'];

    $sql = "SELECT * FROM students WHERE id = $id";
    $result  = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header('Location:index.php');
    }
} else {
    header('Location:index.php');
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
            <h1>Student Info Home <span class="text-primary">|| Student</span></h1>
            <a href="index.php" class="btn btn-primary">Add New Student</a>
            <a href="browse.php" class="btn btn-warning">Browse Students</a>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                Student Name : <?= $row['std_name'] ?><br />
                Student Email : <?= $row['std_email'] ?> <br />
                Student Phone : <?= $row['std_phone'] ?><br />
                Student Gender : <?= $row['std_gender'] ?><br />
                Student Address : <?= $row['std_address'] ?><br />
            </div>
        </div>
    </div>
</body>

</html>