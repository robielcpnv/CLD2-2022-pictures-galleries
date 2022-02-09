@extends('layouts.app')

@section('content')
<form action="{{ route('galleries.pictures.store', $gallery) }}" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title"><br>
    <label  for="picture">
        picture
      </label>
      <br>
      <input id="picture" name="picture" type="file"><br>
    <input type="submit" value="Ajout picture">
</form> 
@endsection