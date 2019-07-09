@extends('layouts.app')
@section('title', 'browse')
@section('content')
<br>
    <div class="container">
        <div class="jumbotron">
            <h1>Student Info Home <span class="text-primary">|| Available Student</span></h1>
            <a href="/student/create" class="btn btn-primary">Add New Students</a>
        </div>
    </div>
    <div class="container">
   
   
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