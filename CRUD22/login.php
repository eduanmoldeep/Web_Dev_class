<?php
session_start();

if (isset($_SESSION['login'])) {
    if ($_SESSION['login']) {
        header('Location:index.php');
    }
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_info";

$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['submit_login'])) {

    $flag = 0;

    $userEmail = $_POST['user_email'];
    $userPass = $_POST['user_password'];

    $sql = "SELECT user_email FROM users WHERE user_email = '$userEmail'";
    if (mysqli_num_rows(mysqli_query($conn, $sql)) > 0) {
        $sql = "SELECT user_password,user_full_name FROM users WHERE user_email = '$userEmail'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        if (password_verify($userPass, $row['user_password'])) {

            $_SESSION['error'] = "";

            $_SESSION['login'] = true;
            $_SESSION['user_name'] = $row['user_full_name'];
            header('Location:index.php');
        } else {
            $flag = 1;
            echo "password not verify";
        }
    } else {
        $flag = 1;
        echo "email not found";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class=" container">
        
        <div class="row">



            <div class="col-4">

                <div class="container" style="background-color: rgba(0,0,0,0.4);">

                    <div class="background">
                        <img class="blur" src="http://www.kdfxfund.com/web/themes/kdfxfund/img/login-bg/bg-1.jpg" alt="">

                        <div class="foreground">

                            <?php if (isset($flag) && $flag === 1) { ?>
                                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <?= mysqli_error($conn) ?>
                                </div>
                            <?php } ?>

                            <?php if (isset($_SESSION['error'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <?= $_SESSION['error'] ?>
                                </div>
                            <?php } ?>

                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="user_email" style="color:azure, font-size:24px"><b>Email</b></label>
                                    <input type="email" class="form-control" name="user_email" id="user_email" placeholder="Enter User Email" />
                                </div>
                                <div class="form-group">
                                    <label for="user_password">Password</label>
                                    <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Enter Password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit_login">Login</button>
                                <br>
                                &nbsp;
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-4"></div>
            <div class="col-4"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>