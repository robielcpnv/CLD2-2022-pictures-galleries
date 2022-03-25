@extends('layouts.app')

@section('content')
<form action="{{ route('galleries.pictures.store', $gallery) }}" enctype="multipart/form-data" method="POST">
    @csrf
    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br>
    <label  for="picture_file">
        picture
      </label>
      <br>
      <input id="picture_file" name="picture_file" type="file" required><br>
    <input type="submit" value="Ajout picture">
</form>
@endsection
