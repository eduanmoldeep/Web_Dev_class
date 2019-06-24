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

    if(isset($_POST['register'])){

        $result;
        $flag = 0;

        $userFullName = $_POST['user_full_name'];
        $userEmail = $_POST['user_email'];
        $userPassword = password_hash($_POST['user_password'],PASSWORD_DEFAULT);
        $userGender = $_POST['user_gender'];

        var_dump($userPassword);

        $sql = "SELECT user_email FROM users WHERE user_email = '$userEmail'";
        if(mysqli_num_rows(mysqli_query($conn,$sql)) > 0){
            $flag = 1;
        }else{
            $sql = "INSERT INTO users(user_full_name,user_email,user_password,user_gender) VALUES('$userFullName','$userEmail','$userPassword','$userGender')";
            $result = mysqli_query($conn,$sql);
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-4">
            <?php 
                if(isset($result) && $result === TRUE){ ?>
                    <div class="alert alert-success" role="alert">
                        <strong>USer Registered</strong>
                    </div>
                <?php }else if(isset($result) && $result === FALSE){ ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Something Went Wrong <?= mysqli_error($conn) ?></strong>
                    </div>
            <?php }else if(isset($flag) && $flag === 1){ ?>
                <div class="alert alert-warning" role="alert">
                    <strong>Email Already Available</strong>
                </div>
            <?php }
            ?>
                <form action="register.php" method="post">
                    <div class="form-group">
                        <label for="user_full_name">Full Name</label>
                        <input type="text" class="form-control" name="user_full_name" id="user_full_name"
                            placeholder="Enter Your Full Name">
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email</label>
                        <input type="email" class="form-control" name="user_email" id="user_email"
                            placeholder="Enter You Email">
                    </div>
                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" class="form-control" name="user_password" id="user_password"
                            placeholder="Enter Password">
                    </div>
                    <div class="form-group">
                        <label for="user_gender">Gender</label>
                        <select class="form-control" name="user_gender" id="user_gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>