@extends('layouts.app')

@section('content')
<a href="{{ route('galleries.pictures.create', $gallery) }}">Add new  picture</a>

<table>
    <thead>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($pictures as $picture)
            <tr>
                <td>{{ $picture->title }} </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection




