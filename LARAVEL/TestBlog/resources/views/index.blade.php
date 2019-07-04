@extends('layouts.app')
@section('title', 'browse')
@section('content')
<br>
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
            </tbody>
        </table>
    </div>

    @endsection