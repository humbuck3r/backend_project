@extends('base')
@section('title') Inicio @endsection
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>{{ "ID" }}</th>
            <th>{{ "TITLE" }}</th>
            <th>{{ "AUTHOR" }}</th>
            <th>{{ "ACCIONES" }}</th>
        </tr>
    </thead>
    <tbody>
        @if (count($posts) >= 1)
            @foreach ($posts as $post)
            <tr>
                <td scope="row"> {{ $post->id }} </td>
                <td>{{$post->title }}</td>
                <td>{{$post->title }}</td>
            <td> editar | borrar </td>
        </tr>
            @endforeach
        @else
            <tr>
                <td scope+"row">{{"no encontro resultados"}}</td><td>
        @endif
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
    <main class="container-fluid">

    </main>
@endsection
