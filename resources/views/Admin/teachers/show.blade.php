@extends('layout.main_template')

@section('content')

<h1>Detalles del tutor</h1>
<h3>Nombre: <p>{{$teacher->name}}</p></h3>
<h3>Apellido paterno: <p>{{$teacher->last_name}}</p></h3>
<h3>Apellido materno: <p>{{$teacher->second_last_name}}</p></h3>
<h3>Email: <p>{{$teacher->email}}</p></h3>
<h3>Telefono: <p>{{$teacher->phone}}</p></h3>
<!-- TODO show image -->
@endsection