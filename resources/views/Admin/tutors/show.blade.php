@extends('layout.main_template')

@section('content')

<h1>Detalles del tutor</h1>
<h3>Nombre: <p>{{$tutor->name}}</p></h3>
<h3>Apellido paterno: <p>{{$tutor->last_name}}</p></h3>
<h3>Apellido materno: <p>{{$tutor->second_last_name}}</p></h3>
<h3>Email: <p>{{$tutor->email}}</p></h3>
<h3>Telefono: <p>{{$tutor->phone}}</p></h3>
<h3>Relación: {{$tutor->relation}}</h3>
<!-- TODO show image -->
@endsection