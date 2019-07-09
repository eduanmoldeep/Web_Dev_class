@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('student', []) }}" method="get">
    <button class="btn btn-primary" type="submit"><b>GO TO Student Section</b></button>
    </form>
</div>
@endsection
