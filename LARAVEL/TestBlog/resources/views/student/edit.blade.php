@extends('layouts.app')
@section('content')
<div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>    
                @endforeach
                </ul>
            </div>
        @endif
        <form action="/student/{{ $student->id }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="std_name">Student Name</label>
                <input type="text" name="std_name" id="std_name" class="form-control" value="{{ $student->name }}">
            </div>
            <div class="form-group">
                <label for="std_email">Student Email</label>
            <input type="email" name="std_email" id="std_email" class="form-control" value="{{ $student->email }}">
            </div>
            <div class="form-group">
                <label for="std_sem">Select Sem</label>
                <select name="std_sem" id="std_sem" class="form-control">
                    <option value="1" <?= $student->sem == 1 ? "selected" : "" ?>>First Sem</option>
                    <option value="2" <?= $student->sem == 2 ? "selected" : "" ?>>Second Sem</option>
                    <option value="3" <?= $student->sem == 3 ? "selected" : "" ?>>Third Sem</option>
                    <option value="4" <?= $student->sem == 4 ? "selected" : "" ?>>Fourth Sem</option>
                    <option value="5" <?= $student->sem == 5 ? "selected" : "" ?>>Fifth Sem</option>
                    <option value="6" <?= $student->sem == 6 ? "selected" : "" ?>>Sixth Sem</option>
                    <option value="7" <?= $student->sem == 7 ? "selected" : "" ?>>Seventh Sem</option>
                    <option value="8" <?= $student->sem == 8 ? "selected" : "" ?>>Eighth Sem</option>
                </select>
            </div>
            <div class="form-group">
              <label for="std_gender">Select Gender</label>
              <select name="std_gender" id="std_gender" class="form-control">
                  <option value="male" <?= $student->gender === "male" ? "selected" : "" ?>>Male</option>
                  <option value="female" <?= $student->gender === "female" ? "selected" : "" ?>>Female</option>
                  <option value="other" <?= $student->gender === "other" ? "selected" : "" ?>>Other</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
    </div>
@endsection