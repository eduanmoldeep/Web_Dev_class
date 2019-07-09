@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Here starts the page -->
        <form action="{{url('student')}}" method="post">
        <!-- csrf token needed to make sure not expired page -->
        @csrf
        <div class="form-group">
            <label for="std_name">Student Name:</label>
            <input id="std_name" class="form-control" type="text" name="std_name">
        </div>

        <div class="form-group">
            <label for="std_email">Student Email:</label>
            <input id="std_email" class="form-control" type="email" name="std_email">
        </div>


        <div class="form-group">
            <label for="std_phone">Student Phone</label>
            <input class="form-control" type="text" name="std_phone" id="std_phone">
        </div>

        <div class="form-group">
            <label for="std_sem">Student Semester</label>
            <select id="std_sem" class="form-control" name="std_sem">
                <option value="1">First Semester</option>
                <option value="2">Second Semester</option>
                <option value="3">Third Semester</option>
                <option value="4">Fourth Semester</option>
                <option value="5">Fifth Semester</option>
                <option value="6">Sixth Semester</option>
                <option value="7">Seveth Semester</option>
                <option value="8">Eighth Semester</option>
            </select>
        </div>

        <div class="form-group">
          <label for="std_gender">Select Gender</label>
          <select class="form-control" name="std_gender" id="std_gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>


        <button type="submit" class="btn btn-primary">Create Student</button>
        </form>
    </div>
@endsection