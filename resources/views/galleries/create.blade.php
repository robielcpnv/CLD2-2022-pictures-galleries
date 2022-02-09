@extends('layouts.app')

@section('content')
    <form action="{{ route('galleries.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <input type="submit" value="Create">
    </form> 
@endsection