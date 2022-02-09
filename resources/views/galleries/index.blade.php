@extends('layouts.app')

@section('content')
<a href="{{ route('galleries.create') }}">create gallery

<table>
    <thead>
        <th>Name</th>
    </thead>
    <tbody>
        @foreach ($galleries as $gallery)
            <tr>
                <td>
                    <a href="{{ route('galleries.show', $gallery->id) }}">
                        {{ $gallery->name }}
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection




