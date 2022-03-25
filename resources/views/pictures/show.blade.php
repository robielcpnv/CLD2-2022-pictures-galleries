@extends('layouts.app')

@section('content')
    <h1 name="titlePage">Picture N°{{ $picture->id }}</h1>
    <a href="{{ route('galleries.pictures.index', $gallery) }}">All pictures in {{ $gallery->name }}</a>
    <p>Title : {{ $picture->title }} </p>
    <img alt="{{ $picture->title }}"
         style="max-width: 500px; height: auto"
         src="{{ route('galleries.pictures.show',[$gallery,$picture]) }}"
    >
    <form method="post" action="{{ route('galleries.pictures.destroy', [$gallery, $picture])}}">
        @method('delete')
        @csrf
        <input type="submit" value="Delete">
    </form>
@endsection
