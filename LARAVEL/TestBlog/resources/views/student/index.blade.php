@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('student', []) }}" method="get">
    <button type="submit">GO TO Student</button>
    </form>
</div>
@endsection
