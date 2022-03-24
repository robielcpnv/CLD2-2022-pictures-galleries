@extends('layouts.app')

@section('content')
    <a href="{{ route('galleries.pictures.create', $gallery) }}">Add new  picture</a>
    <br>
    <img src="{{ route('galleries.pictures.show',[$gallery,$picture]) }}">
@endsection
