@extends('base')
@section('title') Puestos de trabajo @endsection
@section('content')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Puestos de trabajo</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>


    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>


    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>

    </tr>
  </tbody>
</table>
<button id="btn"type="button" class="btn btn-success">agregar puesto de trabajo</button>
