@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                Name : {{ $student->name }} <br>
                Email : {{ $student->email  }} <br>
                Sem : {{ $student->sem }} <br>
                Gender : {{ $student->gender }} <br>
            <a href="/student/{{ $student->id }}/edit" class="btn btn-success">edit</a>
            </div>
        </div>
    </div>
@endsection