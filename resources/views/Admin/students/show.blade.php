@extends('layout.main_template')

@section('content')

<h1>Detalles del estudiante</h1>
<h3>Nombre: <p>{{$student->name}}</p></h3>
<h3>Apellido paterno: <p>{{$student->last_name}}</p></h3>
<h3>Apellido materno: <p>{{$student->second_last_name}}</p></h3>
<h3>Email: <p>{{$student->email}}</p></h3>
<h3>Telefono: <p>{{$student->phone}}</p></h3>
<h3>Estado: {{$student->state}}</h3>
<h3>Ciudad: {{$student->town}}</h3>
<!-- TODO show image -->
@endsection