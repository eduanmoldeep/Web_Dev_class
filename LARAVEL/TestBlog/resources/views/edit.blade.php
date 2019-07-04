@extends('layouts.app')

@section('title', 'Edit')

@section('content')
<br>
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

          
                   <!-- <div class="alert alert-success" role="alert">
                       <strong>Student Info Updated Successfully</strong>
                   </div>  -->
          
                    <!-- <div class="alert alert-danger" role="alert">
                        <strong>Something Went Wrong </strong>
                    </div> -->
            
                <form action="edit.php?std_id=" method="post">
                    <div class="form-group">
                        <label for="std_name">Student Name</label>
                        <input type="text" name="std_name" id="std_name" class="form-control" placeholder="Enter Student Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="std_email">Student Email</label>
                        <input type="email" name="std_email" id="std_email" class="form-control" placeholder="Enter Student Email Address" value="">
                    </div>
                    <div class="form-group">
                        <label for="std_phone">Student Phone</label>
                        <input type="number" name="std_phone" id="std_phone" class="form-control" placeholder="Enter Student Phone No" value="">
                    </div>
                    <div class="form-group">
                        <label for="std_gender">Select Gender</label>
                        <select name="std_gender" id="std_gender" class="form-control">
                            <option value="male" >Male</option>
                            <option value="female" >Female</option>
                            <option value="other" >Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="std_address">Student Address</label>
                        <textarea name="std_address" id="std_address" rows="5" class="form-control" placeholder="Enter Student Address"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Update Student Info</button>
                </form>
                <br>
            </div>
        </div>
    </div>

    @endsection