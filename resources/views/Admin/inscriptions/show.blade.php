<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
@extends('layout.main_template')

@section('content')

<h1>Detalles de la inscripción</h1>
<h3>Nombre del alumno: <p>{{$inscription->student->name}}</p></h3>
<h3>Nombre de la materia: <p>{{$inscription->subject->subject_name}}</p></h3>
<h3>Fecha de inscripción: <p>{{$inscription->date}}</p></h3>
<!-- TODO show image -->
@endsection