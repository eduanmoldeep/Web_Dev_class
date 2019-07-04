@extends('layouts.app')


@section('content')

<br>
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
                Student Name : <br />
                Student Email : <br />
                Student Phone :<br />
                Student Gender : <br />
                Student Address :<br />
            </div>
        </div>
    </div>




    <!-- <div class="container">
        <div class="jumbotron mt-5">
            <h1>Index Page</h1>
        </div>
    </div> -->
@endsection

