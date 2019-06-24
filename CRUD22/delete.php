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
    
    if(isset($_GET['std_id'])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "student_info";

        $conn = mysqli_connect($servername,$username,$password,$database);

        $id = $_GET['std_id'];

        $sql = "DELETE FROM students WHERE id = $id";

        if(mysqli_query($conn,$sql)){
            header('Location:browse.php?msg=success');
        }else{
            header('Location:browse.php?msg=error');
        }
    }
?>