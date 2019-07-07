
@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="jumbotron">
        <h1>Index Page</h1>
    </div>
    
    <form action="{{ url('student', []) }}" method="get">
    <button type="submit">GO TO Student</button>
    </form>


</div>
@endsection
