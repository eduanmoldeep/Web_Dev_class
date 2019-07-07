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
        <form action="{{ url('student') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="std_name">Student Name</label>
                <input type="text" name="std_name" id="std_name" class="form-control" value="{{ old('std_name') }}">
            </div>
            <div class="form-group">
                <label for="std_email">Student Email</label>
            <input type="email" name="std_email" id="std_email" class="form-control" value="{{ old('std_email') }}">
            </div>
            <div class="form-group">
                <label for="std_sem">Select Sem</label>
                <select name="std_sem" id="std_sem" class="form-control">
                    <option value="1">First Sem</option>
                    <option value="2">Second Sem</option>
                    <option value="3">Third Sem</option>
                    <option value="4">Fourth Sem</option>
                    <option value="5">Fifth Sem</option>
                    <option value="6">Sixth Sem</option>
                    <option value="7">Seventh Sem</option>
                    <option value="8">Eighth Sem</option>
                </select>
            </div>
            <div class="form-group">
              <label for="std_gender">Select Gender</label>
              <select name="std_gender" id="std_gender" class="form-control">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Create New Student</button>
        </form>
    </div>
@endsection