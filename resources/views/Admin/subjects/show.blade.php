@extends('layout.main_template')

@section('content')

<h1>Detalles de la materia</h1>
<h3>Nombre de la materia: <p>{{$subject->subject_name}}</p></h3>
<h3>Descripción: <p>{{$subject->description}}</p></h3>
<h3>Profesor: <p>{{$subject->teacher->name}}</p></h3>
<!-- TODO show image -->
@endsection