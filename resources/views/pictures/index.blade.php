@extends('layouts.app')

@section('content')
    <a href="{{ route('galleries.pictures.create', $gallery) }}">Add new  picture</a>

    <table>
        <thead>
        <th>Name</th>
        <th>Image</th>
        </thead>
        <tbody>
        @foreach ($pictures as $picture)

            <tr>

                <td>
                    <a href="{{ route('galleries.pictures.show',[$gallery,$picture]) }}">
                        {{ $picture->title }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('galleries.pictures.show',[$gallery,$picture]) }}">
                        <img src="{{ route('galleries.pictures.show',[$gallery,$picture]) }}" width="50" height="60"></a>
                </td>
                </a>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection




