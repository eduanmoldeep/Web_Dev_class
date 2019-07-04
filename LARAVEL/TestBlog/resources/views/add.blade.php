@extends('layouts.app')


@section('content')

<br>
    <div class="container">
        <div class="jumbotron">
            <h1>Student Info Home <span class="text-primary">|| Add New Student</h1>
            <a href="browse" class="btn btn-primary">Browse Students</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
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
    <!-- <div class="container">
        <div class="jumbotron mt-5">
            <h1>Index Page</h1>
        </div>
    </div> -->
@endsection

